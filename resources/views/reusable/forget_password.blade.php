<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical"
    data-boxed-layout="boxed" data-card="shadow">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('admin.layout.favicon')

    @include('admin.layout.styles')

    <title>Forget Password</title>
</head>

<body>
    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-8">
                        <a href="../main/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" class="dark-logo" alt="Logo-Dark">
                        </a>
                        <div class="d-none d-lg-flex align-items-center justify-content-center h-n80">
                            <img src="{{ asset('dist/images/logos/logo square.png') }}" alt="modernize-img"
                                class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                            <div class="auth-max-width mx-auto d-flex align-items-center w-100 h-100">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
                                        <p class="mb-0 ">
                                            Please enter the email address associated with your account and We will
                                            email you a link to reset
                                            your password.
                                        </p>
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-3">Forgot
                                            Password</a>
                                        <a href="../main/authentication-login.html"
                                            class="btn bg-primary-subtle text-primary w-100 py-8">Back to
                                            Login</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Import Js Files -->
   @include('admin.layout.scripts')


</body>

</html>
