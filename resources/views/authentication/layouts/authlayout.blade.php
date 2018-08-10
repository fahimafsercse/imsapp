<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend_css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
        <div class="limiter">
                <div class="container-login100">
                    <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
            
                    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-59">
                                Login
                            </span>
                                     
            
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <span class="label-input100">Email</span>
                                <input class="input100" type="text" name="email" placeholder="Email addess...">
                                <span class="focus-input100"></span>
                            </div>
                             
            
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <span class="label-input100">Password</span>
                                <input class="input100" type="text" name="pass" placeholder="*************">
                                <span class="focus-input100"></span>
                            </div>
                                     
    
            
                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <a href="/adminindex" class="login100-form-btn">Login</a>
                                </div>
                                
                               
            
                                <a href="/forgetpass" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                    Forget Password
                                    <i class="fa fa-long-arrow-right m-l-5"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/jquery-3.2.1.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/animsition.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/popper.js')}}"></script>
            <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/select2.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/moment.min.js')}}"></script>
            <script src="{{asset('js/backend_js/daterangepicker.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/countdowntime.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('js/backend_js/main.js')}}"></script>
	
    <div class = "container">
        @yield('content')
    </div>

</body>
</html>