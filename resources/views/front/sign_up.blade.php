<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    @include('admin.layout.favicon')
    @include('admin.layout.styles')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" width="180"
                                        alt="">
                                </a>
                                <p class="text-center">Your Social Campaigns</p>
                                <form method="POST" action="{{ route('sign_up_submit')}}">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text3" class="form-control  @error ('name') is-invalid @enderror" id="exampleInputEmail1"
                                            name="name" value="{{ old('name') }}"
                                            autofocus>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-4 ">
                                        <label for="exampleInputPassword1" class="form-label">Email Addres</label>
                                        <input type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputPassword1"
                                        name="email" value="{{ old('email') }}"
                                        autofocus> 
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="mb-4 ">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control @error ('password') is-invalid @enderror" id="exampleInputPassword1"
                                        name="password" value="{{ old('password') }}"
                                        autofocus> 
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <button type="submit" href="{{ route('sign_up_submit') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Already Have an Account?</p>
                                        <a class="text-primary fw-bold ms-2"
                                            href="{{ route('admin_login') }}">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
</body>

</html>
