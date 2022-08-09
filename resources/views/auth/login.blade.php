


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanflix | Watch Movie for free | Livestream</title>

    <!-- Font Awesome Kit -->
        <script src="https://kit.fontawesome.com/f62b230734.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>
    
    <div class="container">

        <div class="row">
            <a href="{{ url('/') }}">
                <img src="images/logo2.png"/>
            </a>
            
            <div class="col-lg col-md-offset-4" style="margin-top: 15px;">
                <div>   
                    <a id="loginBtn" href="{{ url('login') }}">Login</a>    
                    <a id="registerBtn" href="{{ url('register') }}">Register</a>
                </div>
                
                <form action="login" method="post">
                @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                   
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                   
                    <div class="form-group mt-2">
                        <input for="email" type="text" class="form-control" placeholder="Email" name="email">
                        
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        
                        <div class="warning-input" id="warningEmail">
                            Please enter a valid email.
                        </div>     
                    </div>
                
                    <div class="form-group mt-2">
                        <input for="password" type="password" class="form-control" placeholder="Password" name="password">
                        
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        
                        <div class="warning-input" id="warningPassword">
                            Your password must contain between 4 and 60 characters.
                        </div>
                    </div>

                    <div class="form-group">
                        <button id="btn" class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>

                <div class="remember-flex mb-5">
                    <div>
                        <input type="checkbox" name="rememberme" class="custom-control-input" id="customCheck">
                        <label id="labelon"class="color_text custom-control-label" for="customCheck">Remember me</label>
                    </div>
                    <div class="help">
                        <a class="color_text" href="{{ url('forgot') }}">
                            Forgot Password?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-content">
        <div class="footer d-flex justify-content-center align-items-center d-2 grip-gap">
            <ul id="horizontal-list">
                    <li>
                        <a href="https://www.facebook.com/"><img src="icons/square-facebook-brands-white.svg" id="socialicon"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/"><img src="icons/square-instagram-brands-white.svg" id="socialicon"></a> 
                    </li>
                    <li>
                        <a href="https://twitter.com/"><img src="icons/square-twitter-brands-white.svg" id="socialicon"></a>
                    </li>
                    <li>
                        <a href="https://youtube.com/"><img src="icons/square-youtube-brands-white.svg" id="socialicon"></a>
                    </li>
                </ul>
        </div>
        
        <div class="footer-text text-white text-center">
            <span class="text-center">HanFlix</span><br>
            <span>@Copyright. All rights reserved.</span>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript"> 
    function myFunction() {
        document.getElementById("result").innerHTML = "This page is protected by Google reCAPTCHA to ensure youre not a bot. The information collected by Google reCAPTCHA is subject to the Google Privacy Policy and Terms of Service, and is used for providing, maintaining, and improving the reCAPTCHA service and for general security purposes it is not used for personalized advertising by Google.";
    };
    </script>


</body>
</html>