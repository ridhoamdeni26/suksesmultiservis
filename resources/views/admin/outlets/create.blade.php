@extends('admin.layouts.main')

@section('title', 'Outlets Create')

@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 300px; }
</style>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $title['title'] }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ URL('/outlets') }}">{{ $title['breadcrumb'] }}</a></li>
                    @if(isset($title['title']))
                        <li class="breadcrumb-item active">{{ $title['title'] }}</li>
                    @endif
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

@if(session()->has('error'))
<div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
    <i class="mdi mdi-block-helper me-3 align-middle text-danger"></i><strong>Error</strong> - {{ session()->get('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form id="outletsValidate" method="post" action="{{ route('outlets.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mb-3">

                                <label class="form-label" id="validationAddress">Address  <span class="text-danger">*</span></label>
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" rows="4">{{ old('address') }}</textarea>

                                @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mb-3">
                                <label class="form-label" id="validationCity">City  <span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" name="city">

                                @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mb-3">
                                <label class="form-label" id="validationProvince">Province <span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('province') }}" class="form-control @error('province') is-invalid @enderror" name="province">

                                @if ($errors->has('province'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('province') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mb-3">
                                <label class="form-label" id="validationLongitude">Longitude <span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('longitude') }}" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude">

                                @if ($errors->has('longitude'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('longitude') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="mb-3">
                                <label class="form-label" id="validationLatitude">Latitude <span class="text-danger">*</span></label>
                                <input type="text"  value="{{ old('latitude') }}" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude">

                                @if ($errors->has('latitude'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('latitude') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mb-3">
                                <div id="mapid"></div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var mapCenter = [{{ request('latitude', config('leaflet.map_center_latitude')) }}, {{ request('longitude', config('leaflet.map_center_longitude')) }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.zoom_level') }});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Your location :  " + marker.getLatLng().toString())
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
</script>

<script>
    $(document).ready(function() {
        $("#outletsValidate").validate({
            errorPlacement: function(error, element) {
                if (element.attr("name") == "email") error.insertAfter("#label_email");
                if (element.attr("name") == "password") error.insertAfter("#label_password");
            },

            rules: {
                email: {
                    required: true,
                    email: true,
                    minlength: 6,
                },
                password: {
                    required: true,
                    minlength: 6,
                },
            },
            messages: {
                email: {
                    required: "<div class='text-danger my-text-danger pl-1'> Please enter your Email</div>",
                    email: " <div class='text-danger my-text-danger pl-1'> Please enter your Email with true format</div>",
                    minlength: " <div class='text-danger my-text-danger pl-1'> Please enter your Email minimal 6 character</div>",
                    emailexist: " <div class='text-danger my-text-danger pl-1'> Email exist</div>",
                },
                password: {
                    required: " <div class='text-danger my-text-danger pl-1'> Please enter your Password</div>",
                    minlength: " <div class='text-danger my-text-danger pl-1'> Please enter your Password minimal 6 character</div>",
                }
            }
        });
    });
</script>

@endsection