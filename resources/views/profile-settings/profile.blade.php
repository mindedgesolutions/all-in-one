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
                    <h2 class="page-title">Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-8">
                    <div class="card">
                        {{-- <div class="card-body"> --}}
                        <form class="card card-md" wire:submit.prevent='register'>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">User type <span class="text-danger">*</span></label>
                                            <select name='userTypeId' class="form-control">
                                                <option value="">-- Select --</option>
                                                @foreach ($userTypes as $userType)
                                                    <option value="{{ $userType->id }}"
                                                        @if ($userType->id == $user->details->user_type_id) @selected(true) @endif>
                                                        {{ $userType->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">
                                                @error('userTypeId')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='name' placeholder="John Doe"
                                                value="{{ $user->name }}">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name='email'
                                                placeholder="john@domain.com" value="{{ $user->email }}">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <label class="form-label">D.O.B <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name='dob'
                                                value="{{ $user->details->dob }}">
                                            <span class="text-danger">
                                                @error('dob')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="avatar avatar-xl" src="{{ $avatar }}" alt="" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" name='avatar'
                                                id="avatar">
                                        </div>
                                        <span class="text-danger">
                                            @error('avatar')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <button type="submit" class="btn btn-primary" wire:target='register'
                                        wire:load.attr='disabled'>Save changes</button>
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
