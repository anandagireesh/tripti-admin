<div>
    <<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">
                        <!-- Logo -->
                        <div class="card-header pt-4 text-center">
                            <div class="auth-brand mb-0">
                                <a href="{{ url('/') }}" class="logo-dark">
                                    <span><img src="{{ asset('assets/admin/images/logo-dark.png') }}" alt="dark logo" height="24"></span>
                                </a>
                                <a href="{{ url('/') }}" class="logo-light">
                                    <span><img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo" height="24"></span>
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="text-center">
                                <h1 class="text-success"><i class="ri-emotion-happy-line"></i></h1>
                                <h4 class="text-uppercase text-success mt-3">{{$message}}</h4>

                                <a class="btn btn-info mt-3" href="{{url('/')}}"><i class="ri-home-4-line"></i> Back to Home</a>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
</div>
