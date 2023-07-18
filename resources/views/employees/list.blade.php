@extends('layouts.main')

@section('title', 'Admin Dashboard | ' . config('app.name'))

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">List of employees</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('employee.index') }}"><button class="btn btn-default me-2"><i
                                        class="ti ti-x fs-5 me-2"></i></i>Clear</button></a>

                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#modal-filter-employee"><i
                                    class="ti ti-filter fs-5 me-2"></i>Filters</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">

        <div class="container-xl mb-2">
            <div class="col-12">
                <form id="exports" action="{{ route('employee.export.data') }}" method="post">
                    @csrf
                    <div class="card p-2">
                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-2">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="exportType" value="excel" class="form-selectgroup-input"
                                        checked="">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Excel</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="exportType" value="csv" class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">CSV</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="name"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Name</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="email"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Email</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="phone"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Phone</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="role"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Role</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="user_type_id"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Job profile</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="address"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Address</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="dob"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">D.O.B</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="dor"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">D.O.R</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label class="form-selectgroup-item">
                                    <input type="checkbox" name="selectedFields[]" value="salary"
                                        class="form-selectgroup-input" @checked(true)>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Salary</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <span class="d-none d-sm-inline">
                                    <button class="btn btn-success" type="submit">Export</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container-xl">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap table-hover table-striped datatable fs-5">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>D.O.B</th>
                                    <th>D.O.R</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $key => $employee)
                                    <tr>
                                        <td>{{ $employees->firstItem() + $key }}.</td>
                                        <td data-label="Title">
                                            <div>{{ $employee->roles->value('name') }}</div>
                                            <div class="text-muted">{{ $employee->details->userType->name }}</div>
                                        </td>
                                        <td data-label="Name">
                                            <div class="d-flex py-1 align-items-center">
                                                <img class="avatar me-2"
                                                    src="{{ $employee->getMedia('avatar')->last() &&$employee->getMedia('avatar')->last()->getUrl('card')? $employee->getMedia('avatar')->last()->getUrl('card'): asset('theme') . '/images/no-image.png' }}"
                                                    alt="">
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ employeeName($employee->id) }}
                                                    </div>
                                                    <div class="text-muted"><a href="#"
                                                            class="text-reset">{{ $employee->email }}</a></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $employee->phone ?? '--' }}</td>
                                        <td>{{ date('d-m-Y', strtotime($employee->details->dob)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($employee->details->dor)) }}</td>
                                        <td class="text-end">
                                            <button class="btn btn-primary mx-2 p-1 fs-5"><i
                                                    class="ti ti-edit"></i></button>
                                            <button class="btn btn-danger p-1 fs-5"><i class="ti ti-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">NO DATA FOUND</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between">{{ $employees->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.employee-filter-modal')
    @include('modals.employee-export-modal')

@endsection
