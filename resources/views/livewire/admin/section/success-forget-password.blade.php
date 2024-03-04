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
            <!-- email send icon with text-->
            <div class="text-center m-auto">
                <img src="{{asset('assets/images/svg/mail_sent.svg')}}" alt="mail sent image" height="64" />
                <h4 class="text-dark-50 text-center mt-4 fw-bold">Please check your email</h4>
                <p class="text-muted mb-4 mt-3">
                    A email has been send to <b>{{$email}}</b>.
                    Please check for an email from company and click on the included link to
                    reset your password.
                </p>
            </div>

            <!-- form -->
            <form action="index.html">
                <div class="mb-0 d-grid text-center">
                    <button class="btn btn-primary" type="submit"><i class="ri-home-4-line me-1"></i> Back to Home </button>
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
