<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Library App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/green.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/gif" sizes="16x16">

</head>
<body>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Library App</h1>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="mailto:abiolaaribisala@gmail.com">Contact Us</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-xl-5 offset-xl-3">


            <div class="login-register-page">
                <h4>Register for the Library App</h4>
                <br>

                <form method="post" action="{{route('register')}}">
                @csrf
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                        <div class="col-md-6">
                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">
                            {{ __('Password') }}
                            <br>
                            <small>min 6 characters</small>
                        </label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <button class="button" type="submit">Register</button> 
                </form>

                

                <br><br>
                <div>
                    <h4>Already Registered <a href="/"> Login Here</a></h4>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="{{ URL::to('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ URL::to('assets/js/mmenu.min.js') }}"></script>
<script src="{{ URL::to('assets/js/tippy.all.min.j') }}s"></script>
<script src="{{ URL::to('assets/js/simplebar.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::to('assets/js/snackbar.js') }}"></script>
<script src="{{ URL::to('assets/js/clipboard.min.js') }}"></script>
<script src="{{ URL::to('assets/js/counterup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/slick.min.js') }}"></script>
<script src="{{ URL::to('assets/js/custom.js') }}"></script>

</body>
</html>
