@extends('admin.layouts.main')

@section('title', __('outlet - sukses multi servis'))

@section('content')

<!-- DataTables -->
<link href="{{ URL::asset('backend/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('backend/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ URL::asset('backend/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
<link type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />

<style>
    .table-rep-plugin .btn-toolbar {
        display:none;
    }
    .button-maimaid {
        margin-bottom:20px;
    }
    .feather-14{
        width: 14px;
        height: 14px;
    }

    table.dataTable tr th.select-checkbox.selected::after {
    content: "✔";
    margin-top: -11px;
    margin-left: 6px;
    text-align: center;
}
</style>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ URL('/news') }}">{{ $title }}</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
                <p class="card-title-desc">Showing 
                    
                </p>
            </div>
            <div class="card-body">

            @if(session()->has('success'))
                <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('error'))
            <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                <i class="mdi mdi-block-helper me-3 align-middle text-danger"></i><strong>Error</strong> - {{ session()->get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

                <div class="row justify-content-start">
                    <div class="col-4">
                        <form class="app-search d-none d-lg-block" action="{{ url()->current() }}" method="get">
                        {{ csrf_field() }}
                            <div class="position-relative">
                                <input type="text" name="searching" value="{{ request('searching') }}" class="form-control" placeholder="@lang('translation.Search')">
                                <button class="btn btn-primary" name="search" value="search" id="search" type="submit"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Success -->
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <div class="button-maimaid d-flex flex-wrap gap-3">
                                <a class="btn btn-primary waves-effect waves-light" href="{{ route('outlets.create') }}" role="button">Create</a>
                                <a class="btn btn-danger waves-effect waves-light" href="#" role="button">Delete</a>
                            </div>

                            <form id="customer_table" action="#" method="POST">
                                <table id="example" class="table table-bordered dt-responsive nowrap w-100" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Province</th>
                                            <th>Creator Id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>

                                <hr>

                                <p>Press <b>Submit</b> and check console for URL-encoded form data that would be submitted.</p>

                                <p><button>Submit</button></p>

                                <p><b>Selected rows data:</b></p>
                                <pre id="example-console-rows"></pre>

                                <p><b>Form data as submitted to the server:</b></p>
                                <pre id="example-console-form"></pre>

                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')

<!-- Required datatable js -->
<script src="{{ URL::asset('backend/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ URL::asset('backend/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('backend/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

<script>
var APP_URL = {!! json_encode(url('/')) !!}
$(document).ready(function() {

    $('#example tbody').on( 'click', 'td', function () {
        alert( 'Clicked on: '+this.innerHTML );
    });
    var table = $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": APP_URL + "/" + "data-outlet",
            "type": 'POST'
        },
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'address', name: 'address'},
            {data: 'city', name: 'city'},
            {data: 'province', name: 'province'},
            {data: 'creator_name', name: 'creator_name'},
            {data: 'action', name: 'action', orderable: false},
        ],
        "columnDefs": [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        "responsive": true,
        "select": {
            'style': 'multi'
        },
        "order": [[1, 'asc']]
    });
   
   // Handle form submission event 
   $('#customer_table').on('submit', function(e){
      var form = this;
      
      var rows_selected = table.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element 
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );
      });

      // FOR DEMONSTRATION ONLY
      // The code below is not needed in production
      
      // Output form data to a console     
      $('#example-console-rows').text(rows_selected.join(","));
      
      // Output form data to a console     
      $('#example-console-form').text($(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
   });   
});

</script>

@endsection

