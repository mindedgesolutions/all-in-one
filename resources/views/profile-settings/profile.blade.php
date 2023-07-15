@extends('layouts.main')

@section('title', 'Profile | ' . config('app.name'))

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">Update profile</div>
                    <h2 class="page-title">Profile of {{ $user->details->first_name }}
                        : {{ $user->details->userType->name . ' (' . $user->roles->value('name') . ')' }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-10">
                    <div class="card">
                        {{-- <div class="card-body"> --}}
                        <form class="card card-md" action="{{ route('settings.profile.update', ['slug' => $userSlug]) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">First name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='fname' placeholder="John"
                                                value="{{ $user->details->first_name }}">
                                            <span class="text-danger">
                                                @error('fname')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Middle name</label>
                                            <input type="text" class="form-control" name='mname' placeholder="Anderson"
                                                value="{{ $user->details->middle_name }}">
                                            <span class="text-danger">
                                                @error('mname')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Last name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='lname' placeholder="Doe"
                                                value="{{ $user->details->last_name }}">
                                            <span class="text-danger">
                                                @error('lname')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='email'
                                                placeholder="john@domain.com" value="{{ $user->email }}">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='phone'
                                                placeholder="9830098300" value="{{ $user->phone }}">
                                            <span class="text-danger">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Address line 1 <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='addressLineOne'
                                                placeholder="100/A, Test address line 1"
                                                value="{{ $user->details->address_line_1 }}">
                                            <span class="text-danger">
                                                @error('addressLineOne')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Address line 2</label>
                                            <input type="text" class="form-control" name='addressLineTwo'
                                                placeholder="Test address line 2"
                                                value="{{ $user->details->address_line_2 }}">
                                            <span class="text-danger">
                                                @error('addressLineTwo')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">D.O.B <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name='dob'
                                                value="{{ $user->details->dob }}">
                                            <span class="text-danger">
                                                @error('dob')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">&nbsp;</label>
                                            <label class="form-label mt-3">Date of retirement :
                                                {{ date('d-m-Y', strtotime($user->details->dor)) }}</label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">&nbsp;</label>
                                            <label class="form-label mt-3">Salary : {{ $user->details->salary }}/-
                                                Annually</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="avatar avatar-xl" id="uploaded" src="{{ $avatar }}"
                                                alt="" />
                                            {{-- <span class="avatar avatar-xl" id="preview" style="display: none"></span> --}}
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" name='avatar' id="avatar">
                                        </div>
                                        <span class="text-danger">
                                            @error('avatar')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#avatar').on('change', function() {
            var file = this.files[0];

            if (file.type.match('image/*')) {
                uploaded.src = URL.createObjectURL(file)
            } else {
                alert('Not an image! Try with an image file');
                this.value = '';
            }
        });
    </script>
@endpush
