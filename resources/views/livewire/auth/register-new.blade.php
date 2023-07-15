<div>
    <div class="page page-center">
        <div class="container col-md-8 py-4">
            <div class="text-center mb-4">
                <a href="javascript:void(0)" class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('theme') }}/static/logo.svg" height="36" alt=""></a>
            </div>
            <form class="card card-md" wire:submit.prevent='register'>
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create new account</h2>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">User type <span class="text-danger">*</span></label>
                                <select wire:model='userTypeId' class="form-control">
                                    <option value="">-- Select --</option>
                                    @foreach ($userTypes as $userType)
                                        <option value="{{ $userType->id }}">{{ $userType->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('userTypeId')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">User role <span class="text-danger">*</span></label>
                                <select wire:model='roleName' class="form-control">
                                    <option value="">-- Select --</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('roleName')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model='fname' placeholder="John">
                                <span class="text-danger">
                                    @error('fname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Middle name</label>
                                <input type="text" class="form-control" wire:model='mname' placeholder="Anderson">
                                <span class="text-danger">
                                    @error('mname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model='lname' placeholder="Doe">
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
                                <input type="text" class="form-control" wire:model='email'
                                    placeholder="john@domain.com">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model='phone' placeholder="9830098300">
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
                                <label class="form-label">Address line 1 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model='addressLineOne'
                                    placeholder="100/A, Test address line 1">
                                <span class="text-danger">
                                    @error('addressLineOne')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Address line 2</label>
                                <input type="text" class="form-control" wire:model='addressLineTwo'
                                    placeholder="Test address line 2">
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
                                <input type="date" class="form-control" wire:model='dob'>
                                <span class="text-danger">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Date of retirement <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" wire:model='dor'>
                                <span class="text-danger">
                                    @error('dor')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Salary <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model='salary'
                                    placeholder="00000000">
                                <span class="text-danger">
                                    @error('salary')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" wire:model='password'
                                    placeholder="xxxxxxxx">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Confirm password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" wire:model='passwordConfirm'
                                    placeholder="xxxxxxxx">
                                <span class="text-danger">
                                    @error('passwordConfirm')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    @if ($avatar)
                        @php
                            try {
                                $temporaryUrl = $avatar->temporaryUrl();
                                $hasImage = true;
                            } catch (\RuntimeException $th) {
                                $hasImage = false;
                            }
                        @endphp
                    @endif

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-auto">
                                @if ($hasImage)
                                    <img class="avatar avatar-xl" src="{{ $temporaryUrl }}" alt="" />
                                @else
                                    <span class="avatar avatar-xl"></span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input type="file" class="form-control" wire:model='avatar'
                                    id="avatar{{ $iteration }}">
                            </div>
                            <span class="text-danger">
                                @error('avatar')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" wire:model='terms' />
                            <span class="form-check-label">Agree the <a href="javascript:void(0)"
                                    tabindex="-1">terms and policy</a>.</span>
                        </label>
                        <span class="text-danger">
                            @error('terms')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100" wire:target='register'
                            wire:load.attr='disabled'>Create new account</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
            </div>
        </div>
    </div>

    @include('modals.success-notification-modal')
    @include('modals.error-notification-modal')
</div>
