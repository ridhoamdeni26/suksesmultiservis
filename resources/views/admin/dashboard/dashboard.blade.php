@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('content')
<style>
    .table-rep-plugin .btn-toolbar {
        display:none;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="page-title-box d-sm-flex justify-content-between">
                    <div class="page-title-right">
                        Welcome To Dashboard
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                </div>

                
            </div>
            <div class="card-body">

                @if(session()->has('success'))
                    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-block-helper me-3 align-middle"></i><strong>Error</strong> - {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection