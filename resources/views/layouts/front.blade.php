<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container">
            <div>
              <a href=" {{ url('/') }}"> <img src="logo.png" class="logo"></a>
            </div>
            <div class="navbar">
                <ul>
                    <li> <a href="#" >Discover</a>
                    <div class="first">
                        <ul>
                            <li><a href="{{ route('fundraiser') }}">Fundraiser</a></li>
                            <li><a href="#">Success stories</a></li>
                        </ul>
                    </div>
                    </li>
                    <li><a href="#"> Fundraiser for</a>
                        <div class="first">
                            <ul>
                                <li><a href=" {{ route('education') }}">Education</a></li>
                                <li><a href=" {{ route('medical') }}">Medical</a></li>
                        
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" >How it works</a></li>
                    <li><a href="{{ route('register') }}">Sign in</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="circle-container">
            <div class="circle">
                <button id="open">
                    <i class="bi bi-list"></i>
                </button>
                <button id="close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer>
            <div class="container3">
                <div>
                    <P>Discover</P>
                    <ul>
                        <li><a href="#">Fundraiser</a></li>
                        <li><a href="#">Success stories</a></li>
                    </ul>
                </div>
                <div>
                       <p>Fundraise For</p>
                       <ul>
                           <li><a href="#">Education</a></li>
                           <li><a href="#">Medical</a></li>
                       </ul>
                </div>
                <div>
                    <p>How it works</p>
                    <ul>
                        <li><a href="#">explain</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <ul>
                    <li><a href="#">Youtude</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">instagram</a></li>
                </ul>
            </div>
        </footer>    
        <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>