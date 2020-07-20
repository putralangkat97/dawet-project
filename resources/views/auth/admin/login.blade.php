<!DOCTYPE html>
<html>
<head>
        <!-- Title -->
        <title>Admin | Login</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <!-- Styles -->
        <link href='https://fonts.googleapis.com/csse092.css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="#" class="logo-name text-lg text-center">Dawet Project</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" action="{{ route('admin.loginSubmit') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">{{ __('Login') }}</button>
                                    {{-- <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                    <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                    <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a> --}}
                                </form>
                                <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

        <!-- Javascripts -->
        <script src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/assets/plugins/pace-master/pace.min.js"></script>
        <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/assets/plugins/switchery/switchery.min.js"></script>
        <script src="/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="/assets/plugins/waves/waves.min.js"></script>
        <script src="/assets/js/modern.min.js"></script> 
</body>
</html>