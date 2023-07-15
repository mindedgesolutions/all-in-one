<div>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="javascript:void(0)" class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('theme') }}/static/logo.svg" height="36" alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form wire:submit.prevent='login'>
                        <div class="mb-3">
                            <label class="form-label">Email address / Phone</label>
                            <input type="text" class="form-control" wire:model='username'
                                placeholder="john@email.com / 9830098300" autocomplete="off" value="souvik@test.com">
                            <span class="text-danger">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" wire:model='password'
                                placeholder="Your password" autocomplete="off" value="password1">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-2 mt-3">
                            <div class="row align-items-center">
                                <div class="col-auto"><span
                                        class="p-3 bg-secondary text-white">{{ $captcha }}</span></div>
                                <div class="col-md-6"><input type="text" class="form-control"
                                        wire:model='inputCaptcha'></div>
                                <div class="col-auto cursor-pointer text-success fs-2"><i class="ti ti-rotate-clockwise"
                                        wire:click='generateCaptcha'></i></div>
                                <span class="text-danger mt-2">
                                    @error('inputCaptcha')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" wire:model='rememberMe'>
                                <span class="form-check-label">Remember me on this device</span>
                            </label>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100" wire:target='login'>Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="hr-text">or</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn w-100">
                                <i class="ti ti-brand-google me-2"></i>
                                Login with Google
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn w-100">
                                <i class="ti ti-brand-github me-2"></i>
                                Login with Guthub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
</div>
