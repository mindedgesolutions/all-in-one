@extends('layouts.main')

@section('title', 'Employees | ' . config('app.name'))

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

                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-export-employee"
                                type="button">Export</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
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
                                            <button class="btn btn-success mx-1 p-1 fs-5"
                                                onclick="openView({{ $employee->id }})"><i class="ti ti-eye"></i></button>

                                            <button class="btn btn-primary mx-1 p-1 fs-5"><i
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
    @include('modals.employee-view-modal')

@endsection

@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function openView(param) {
            var id = param;
            $.ajax({
                type: "get",
                url: "{{ route('employee.view.modal') }}",
                data: {
                    id: id,
                },
                success: function(response) {
                    $('#modal-view-employee').modal('show');
                    $('#name-title').text(response.name);
                    $('#first-name').text(response.data.details.first_name);
                    $('#middle-name').text(response.data.details.middle_name ?? 'NA');
                    $('#last-name').text(response.data.details.last_name);
                    $('#email').text(response.data.email);
                    $('#phone').text(response.data.phone ?? 'NA');
                    $('#address-one').text(response.data.details.address_line_1);
                    $('#address-two').text(response.data.details.address_line_2 ?? 'NA');
                    $('#dob').text(response.dob);
                    $('#dor').text(response.dor);
                    $('#salary').text(response.data.details.salary);
                    var avatar =
                        '<img class="avatar avatar-xl" id="uploaded" src="' + response.avatar + '" alt="">';
                    $('#uploaded').html(avatar);
                }
            });
        }
    </script>
@endpush
