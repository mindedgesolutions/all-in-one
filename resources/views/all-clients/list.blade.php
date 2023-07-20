@extends('layouts.main')

@section('title', 'Clients | ' . config('app.name'))

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">List of clients</h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('client.index') }}"><button class="btn btn-default me-2"><i
                                        class="ti ti-x fs-5 me-2"></i></i>Clear</button></a>

                            <button class="btn btn-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#modal-filter-client"><i
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
                                    <th>Name</th>
                                    <th>Contact 1</th>
                                    <th>Contact 2</th>
                                    <th>Address</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clients as $key => $client)
                                    <tr>
                                        <td>{{ $clients->firstItem() + $key }}.</td>
                                        <td>{{ $client->name }}</td>
                                        <td>{!! clientContacts($client->id)[0] !!}</td>
                                        <td>{!! clientContacts($client->id)[1] !!}</td>
                                        <td>
                                            {{ strlen($client->address) > 25 ? substr($client->address, 0, 25) . ' ...' : $client->address }}
                                        </td>
                                        <td class="text-end">
                                            <button class="btn btn-success mx-1 p-1 fs-5"
                                                onclick="openView({{ $client->id }})"><i class="ti ti-eye"></i></button>

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
                    <div class="card-footer d-flex justify-content-between">{{ $clients->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.all-clients.client-view-modal')
    @include('modals.all-clients.client-filter-modal')

@endsection

@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function openView(param) {
            $('#contacts').text('');
            var id = param;
            $.ajax({
                type: "post",
                url: "{{ route('client.view.modal') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    $('#modal-view-client').modal('show');
                    $('#name-title').text(response.name);
                    $('#address').text(response.address);
                    $('#contact-header').html(
                        '<div class="row">\
                            <div class="col-md-4">\
                                <label class="form-label">Name</label>\
                            </div>\
                            <div class="col-md-4">\
                                <label class="form-label">Email</label>\
                            </div>\
                            <div class="col-md-2">\
                                <label class="form-label">Phone 1</label>\
                            </div>\
                            <div class="col-md-2">\
                                <label class="form-label">Phone 2</label>\
                            </div>\
                        </div>'
                    );
                    $.each(response.contacts, function(index, value) {
                        var contact = '<div class="row">\
                            <div class="col-md-4">\
                                <label class="form-label">' + value.contact_person + '</label>\
                            </div>\
                            <div class="col-md-4">\
                                <label class="form-label">' + value.email + '</label>\
                            </div>\
                            <div class="col-md-2">\
                                <label class="form-label">' + value.phone_1 + '</label>\
                            </div>\
                            <div class="col-md-2">\
                                <label class="form-label">' + value.phone_2 + '</label>\
                            </div>\
                        </div>';
                        $('#contacts').append(contact);
                    });
                }
            });
        }
    </script>
@endpush
