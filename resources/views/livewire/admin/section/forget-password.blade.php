<!--Auth fluid left content -->
<div class="auth-fluid-form-box">
    <div class="card-body d-flex flex-column h-100 gap-3">

        <!-- Logo -->
        <div class="auth-brand text-center text-lg-start">
            <a href="{{ url('/') }}" class="logo-dark">
                <span><img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="dark logo" height="24"></span>
            </a>
            <a href="{{ url('/') }}" class="logo-light">
                <span><img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo" height="24"></span>
            </a>
        </div>

        <div class="my-auto">
            <!-- title-->
            <h4>Reset Password</h4>
            <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset
                your password.</p>

            <!-- form -->
            <form wire:submit="sendOtpEmail">
                <div class="mb-3">
                    <label for="emailaddress" class="form-label">Email address</label>
                    <input class="form-control" type="email" wire:model="email" id="emailaddress" required=""
                        placeholder="Enter your email">
                        <div>
                            @error('success')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div>
                            @error('email')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                </div>
                <div class="mb-0 text-center d-grid">
                    <button class="btn btn-primary" type="submit">Reset Password </button>
                </div>
            </form>
            <!-- end form-->
        </div>

        <!-- Footer-->
        <footer class="footer footer-alt">
            <p class="text-muted">Back to <a href="{{ url('user-login') }}" class="text-muted ms-1"><b>Log In</b></a>
            </p>
        </footer>

    </div> <!-- end .card-body -->
</div>
<!-- end auth-fluid-form-box-->
