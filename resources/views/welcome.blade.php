<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheba Blood Dononation Website</title>
    <link rel="stylesheet" href="{{asset('/frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{asset('/frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/fonts/ionicons.min.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{{url('/')}}"><strong>Sheba</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto main-menu">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/donar-view')}}">Donar</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/about-us')}}">about us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/community')}}">Community</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/registration-form')}}">registration</a></li>
                   <?php 
                      $userid=Session::get('user_id');
                      $admin_id=Session::get('admin_id');
                      if ($userid) { ?>
                        <li class="dropdown nav-item" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> {{Session::get('name')}}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="padding: 10px;">
                                <li class="nav-item"><a href="/user-profile" style="text-decoration: none;"><i class="halflings-icon user"></i> Profile</a></li>
                                <hr>
                                <li class="nav-item"><a href="/logout" style="text-decoration: none;"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                    <?php }elseif ($admin_id) {?>
                    <li class="dropdown nav-item" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> {{Session::get('name')}}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="padding: 10px;">
                                <li class="nav-item"><a href="/admin-profile" style="text-decoration: none;"><i class="halflings-icon user"></i> Profile</a></li>
                                <hr>
                                <li class="nav-item"><a href="/logout" style="text-decoration: none;"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                    <?php }else{ ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('/login-user')}}">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-float">       
        @yield('content')
    </div>

    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Text</p>
            <li><a href="{{url('/login-admin')}}">admin login</a></li>
        </div>

    </footer>
    

    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/script.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/theme.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var url = window.location;
            $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
            $('ul.nav a').filter(function() {
                 return this.href == url;
            }).parent().addClass('active');
        });
    </script> 
    
</body>

</html>