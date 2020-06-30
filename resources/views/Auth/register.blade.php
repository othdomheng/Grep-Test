<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Grep Test</title>
    @yield('before_styles')
    @stack('before_styles')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.components.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.core.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.extra-components.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.pages.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/alt/adminlte.plugins.min.css" />
    @yield('after_styles')
    @stack('after_styles')
    @yield('css')
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Create Account</b></a>
        </div>
        <div class="register-box-body">
            <form method="POST" action="{{ route('register_store') }}" class="form-horizontal">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-sm-5 col-form-label">Email:</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-5 col-form-label">Phone:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" name="phone">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-5 col-form-label">Password:</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="retype_password" class="col-sm-5 col-form-label">Retype Password:</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Retype password" name="password_confirmation">
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 align-self-center mx-auto">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Create my account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@yield('before_scripts')
@stack('before_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/demo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/pages/dashboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/pages/dashboard2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/pages/dashboard3.min.js"></script>
@yield('after_scripts')
@stack('after_scripts')

@yield('scripts')
</body>
</html>
