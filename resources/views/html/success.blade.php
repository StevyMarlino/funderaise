<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="container">
            <div>
             <a>  <img src="{{ asset('logo.png')}}" class="logo"></a>
            </div>
            <div class="navbar">
                <ul>
                    <li> <a href="#" >Discover</a>
                    <div class="first">
                        <ul>
                            <li><a href="#">Fundraiser</a></li>
                            <li><a href="#">Success stories</a></li>
                        </ul>
                    </div>
                    </li>
                    <li><a href="#"> Fundraiser for</a>
                        <div class="first">
                            <ul>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Medical</a></li>
                        
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" >How it works</a></li>
                    <li><a href="../html/signup.html">Sign in</a></li>
                    <li><a href="#">Login</a></li>
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

    <div class="container-flex">
        <div>
             <img src="{{ asset('img/background1.jpg')}}" class="image1">
             <h2>Freedom Convoy 2022</h2>
             <p>To our Fellow Canadians,  
             the time for political over reach is over.  </p>
        </div>
        <div>
         <img src="{{ asset('img/background1.jpg')}}" class="image1">
         <h2>topic</h2>
         <p>We are a peaceful country that has helped protect nations across the 
             globe from Tyrannical governments who oppressed their people, well 
             now its happening to us.</p>
    </div>
    <div>
     <img src="{{ asset('img/background1.jpg')}}" class="image1">
     <h2>topic</h2>
     <p>We are a peaceful country that has helped protect nations across 
         the globe from Tyrannical governments who oppressed their people,
         ell now its happening to us.</p>
</div>
 
        
    </div>

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
    </div>  
    <script src="../html/script.js"></script>
</body>
</html>