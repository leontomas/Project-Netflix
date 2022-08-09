<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hanflix | Watch Movie for free | Livestream</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- External CSS -->
        <link rel="stylesheet" type="text/css" href="css/welcome.css">

        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- Font Awesome Kit -->
        <script src="https://kit.fontawesome.com/392710ecf4.js" crossorigin="anonymous"></script>
    </head>

   

    <body>
        <!-- Navbar -->
        <nav id="nav" class="navbar navbar-expand-lg">
            <div class="container-fluid" id="nav">
                <a class="navbar-brand mr-5" href="#">
                    <img src="./images/logo2.png" style="">
                </a>

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a class="login" href="{{ route('login') }}">
                                <button class="btn-login">
                                    Login
                                </button>
                            </a>

                        @if (Route::has('register'))
                            <a class="register" href="{{ route('register') }}">
                                <button class="btn-register">
                                    Register
                                </button>
                            </a>
                        @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <!-- Main Content -->
        <div class="mid-content text-center text-white m-5 p-5 full-height">
            <div class="image">
                <div class="">   
                    <h1>Watch your favorite Movies and Livestream here!</h1>
                    <p>Ready to watch? Enter your email Register.</p>
                    <div class="input">
                        <input class="textbox" type="text" placeholder="Enter email" name="">
                        <button class="btn-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- second -->
        <div class="container-fluid">
            <div class="row m-5">
                <div class="col-md-2"></div>
                <!-- Left side -->
                <div class="col-md-4">

                    <h1><span>Ready to get started?</span></h1>
                    <p><span>Sign up to watch livestream for free</span></p>
                    <button class="btn-submit">Submit</button>
                        
                </div>
                
                <!-- Right side -->
                <div class="col-md-4">
                    <img alt="What is Primefoam" class="img-responsive center-block laptop" src="view/assets/layout-imgs/whatis.png">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <!-- <div class="container ">
        <div class="  col-md-12 my-auto" id="tools">
            <h3 class="text-center my-4">pers</h3>
            <div class="d-flex flex-row flex-wrap align-items-center justify-content-around text-center p-3 my-3">
                   
                </div>

                <div class="d-flex flex-row flex-wrap align-items-center justify-content-around text-center p-3 my-3">
                    
                </div>
            </div>
        </div> -->

        <div class="movies">
            <h1 class="text-white">Watch Now!</h1>
            <a href=""><img src="./images/ambulance.jpg"></a>
            <a href=""><img src="./images/crawl.jpg"></a>
            <a href=""><img src="./images/dakota.jpg"></a>
            <a href=""><img src="./images/dark-phoenix.jpg"></a>
            <a href=""><img src="./images/coherence.jpg"></a>
        </div>

        <div class="footer-content">
            <div class="footer d-flex justify-content-center align-items-center d-2 grip-gap">
                <ul id="horizontal-list">
                    <li>
                        <a href="https://www.facebook.com/"><img src="icons/white-square-facebook-brands.png" id="socialicon"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/"><img src="icons/white-square-instagram-brands.png" id="socialicon"></a> 
                    </li>
                    <li>
                        <a href="https://twitter.com/"><img src="icons/white-square-twitter-brands.png" id="socialicon"></a>
                    </li>
                    <li>
                        <a href="https://youtube.com/"><img src="icons/white-square-youtube-brands.png" id="socialicon"></a>
                    </li>
                </ul>
            </div>
           
            <div class="footer-text text-white text-center">
                <span class="text-center">HanFlix</span><br>
                <span>@Copyright. All rights reserved.</span>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
