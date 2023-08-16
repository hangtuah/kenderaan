@extends('layouts.app', [
'parentSectionMain' => 'vehicle-main',
'parentSection' => '',
'elementName' => 'vehicle-index',
])

@section('content')
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid px-4">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="user"></i></div>
                        Vehicle - List
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
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Colour</th>
                        <th>Year</th>
                        <th>Status</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Colour</th>
                        <th>Year</th>
                        <th>Status</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($vehicles as $row)
                    <tr>
                        <td>{{ $row->brand }}</td>
                        <td>{{ $row->model }}</td>
                        <td>{{ $row->colour }}</td>
                        <td>{{ $row->year }}</td>
                        <td>
                        @if($row->status == 0)
                        <span class="badge bg-red-soft text-red">Not Active</span>
                        @elseif($row->status == 1)
                        <span class="badge bg-green-soft text-green">Available</span>
                        @else
                        <span class="badge bg-yellow-soft text-yellow">Rented</span>
                        @endif
                        </td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            @if($row->status == 1)
                            <a href="{{ route('vehicle.edit', Crypt::encrypt($row->id)) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('vehicle.delete', Crypt::encrypt($row->id)) }}" class="btn btn-danger">Delete</a>
                            @else
                            <a href="{{ route('vehicle.activate', Crypt::encrypt($row->id)) }}" class="btn btn-info">Activate!</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    <!--<tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                                    Tiger Nixon
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2"><img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                                    Tiger Nixon
                                                </div>
                                            </td>
                                            <td>tiger@email.com</td>
                                            <td>Administrator</td>
                                            <td>
                                                <span class="badge bg-green-soft text-green">Sales</span>
                                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                                <span class="badge bg-red-soft text-red">Marketing</span>
                                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                                            </td>
                                            <td>20 Jun 2021</td>
                                            <td>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i data-feather="trash-2"></i></a>
                                            </td>
                                        </tr>
-->
                </tbody>
            </table>
        </div>
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
