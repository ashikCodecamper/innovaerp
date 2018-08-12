<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @yield('stylesheet')
</head>

<body>
    <div class="container-fluid">
        @auth
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <a class="navbar-brand" href="#">EWM</a>
            <div class="row">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">DCP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PCP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHIPMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REPORT</a>
                    </li>
                </ul>

                <ul class="nav nav justify-content-end" style="float: right !important">

                    <li class="nav-item dropdown text-right">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell text-black"></i>
                            <span class="badge badge-pill badge-danger">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <div class="dropdown-header text-center">
                                <strong>You have 5 notifications</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="icon-user-follow text-success"></i> New user registered</a>
                            <a class="dropdown-item" href="#">
                                <i class="icon-user-unfollow text-danger"></i> User deleted</a>
                            <a class="dropdown-item" href="#">
                                <i class="icon-chart text-info"></i> Sales report is ready</a>
                            <a class="dropdown-item" href="#">
                                <i class="icon-basket-loaded text-primary"></i> New client</a>
                            <a class="dropdown-item" href="#">
                                <i class="icon-speedometer text-warning"></i> Server overloaded</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link pull-right" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Ashikur Rahaman
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Account</strong>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-user"></i> Profile</a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-wrench"></i> Settings</a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-lock"></i> Logout</a>
                        </div>
                    </li>
                </ul>
        </nav>
        @endauth
        </div>
        @auth
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb b-t-1">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">DCP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">PROTO ENTRY</li>
                </ol>
            </nav>
        </div>
        @endauth
        <div class="container">
            @yield('content')
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
        @yield('javascript')
</body>

</html>
