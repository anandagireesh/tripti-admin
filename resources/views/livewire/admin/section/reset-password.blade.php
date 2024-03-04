<div class="auth-fluid-form-box">
    <div class="card-body d-flex flex-column h-100 gap-3">

        <!-- Logo -->
        <div class="auth-brand text-center text-lg-start">
            <a href="{{ url('/') }}" class="logo-dark">
                <span><img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="dark logo"
                        height="24"></span>
            </a>
            <a href="{{ url('/') }}" class="logo-light">
                <span><img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo"
                        height="24"></span>
            </a>
        </div>

        <div class="my-auto">
            <!-- title-->
            <h4 class="mt-0">Sign In</h4>
            <p class="text-muted mb-4">Enter your email address and password to access account.</p>

            <!-- form -->
            <form wire:submit="changePassword">
                <div>
                    @error('success')
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                test
                            </div>
                        </div>
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="emailaddress" class="form-label">Email address</label>
                    <input class="form-control" type="text" wire:model="token" id="token" hidden>
                    <input class="form-control" type="email" wire:model="email" id="emailaddress" disabled>
                    <div>
                        @error('email')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" wire:model="password" id="password"
                        placeholder="Enter your password">
                    <div>
                        @error('password')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input class="form-control" type="password" wire:model="password_confirmation" id="password"
                        placeholder="Enter your password">
                    <div>
                        @error('password')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="d-grid mb-0 text-center">
                    <button class="btn btn-primary" type="submit"><i class="ri-login-box-line"></i> Reset Password
                    </button>
                </div>
                <!-- social-->
                {{-- <div class="text-center mt-4">
                    <p class="text-muted fs-16">Sign in with</p>
                    <ul class="social-list list-inline mt-3">
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="ri-facebook-circle-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="ri-google-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="ri-github-fill"></i></a>
                        </li>
                    </ul>
                </div> --}}
            </form>
            <!-- end form-->
        </div>

        <!-- Footer-->

    </div> <!-- end .card-body -->
</div>
