@extends('layouts.main')

@section('title', 'Profile | ' . config('app.name'))

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">Change password</div>
                    <h2 class="page-title">Change password</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-5">
                    <div class="card">
                        <form class="card card-md" action="{{ route('settings.password.update', ['slug' => $userSlug]) }}"
                            method="post">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="form-label">Old password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name='oldPassword'>
                                        <span class="text-danger">
                                            @error('oldPassword')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <label class="form-label">New password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name='password'>
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <label class="form-label">Confirm new password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name='password_confirmation'>
                                        <span class="text-danger">
                                            @error('password_confirmation')
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

        @if (session()->has('title'))
            @include('modals.inner-pages-success-modal')
        @endif
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#inner-page-success').modal('show');
        });
    </script>
@endpush
