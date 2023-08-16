@extends('layouts.app', [
'parentSectionMain' => 'vehicle-main',
'parentSection' => '',
'elementName' => 'vehicle-create',
])

@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-fluid px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                            Vehicle - @if($edit) Edit @else New @endif
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="{{ route('vehicle.create') }}">
                                            <i class="me-1" data-feather="user-plus"></i>
                                            Add New Vehicle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                                <!-- Account details card-->

                                        <form action="@if($edit) {{ route('vehicle.update',$vehicle->id) }} @else {{ route('vehicle.store') }} @endif" method="post">
                                            @csrf

                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Brand</label>
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter vehicle brand"  name="brand" value="@if($edit){{ $vehicle->brand }}@else{{ old('brand') }}@endif" />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLastName">Model</label>
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter vehicle model"  name="model" value="@if($edit){{ $vehicle->model }}@else{{ old('model') }}@endif" />
                                                </div>
                                            </div>
                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (organization name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputOrgName">Year</label>
                                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter vehicle year of registration"  name="year" value="@if($edit){{ $vehicle->year }}@else{{ old('year') }}@endif" />
                                                </div>
                                                <!-- Form Group (location)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLocation">Colour</label>
                                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your vehicle colour"  name="colour" value="@if($edit){{ $vehicle->colour }}@else{{ old('colour') }}@endif" />
                                                </div>
                                            </div>

                                            <!-- Save changes button-->
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                            <a class="btn btn-dark" href="{{  route('vehicle.index') }}">Back</a>
                                        </form>
        </div>
    </div>
@endsection

@push('stylo')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
@endpush
@push('javascript')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js') }}/datatables/datatables-simple-demo.js"></script>
@endpush
