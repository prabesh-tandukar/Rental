<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>
    <script src="https://kit.fontawesome.com/afa7c81aed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="">Catalog</a></li>
                <li><a href="">Submit Property</a></li>
                <li><a href="about.html">Favorite</a></li>
                <li><a href="contact.html">About</a></li>
                <li><a href="add.html"><i class="fa-solid fa-user"></i></a></li>
                
            </ul>
        </div>
    </section>

    {{-- <section id="hero">
        <h4>Post your proporty</h4>
        <h2>Find your Perfect tenant</h2>
        <h1>Find your Perfect home</h1>
        <!-- <p>Live Together</p> -->
        <button>Add now</button>
    </section> --}}

   @yield('content');

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Kathmandu, Nepal</p>
            <p><strong>Phone:</strong> +977 9841654388</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
           <p><a href="#">About us</a></p>
           <p><a href="#">Privacy Policy</a></p>
           <p><a href="#">Terms & Conditions</a><p>
           <p><a href="#">Contact Us</a></p>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <p><a href="#">Sign In</a></p>
            <p><a href="#">Help</a></p>
        </div>

        <div class="copyright">
            <p> © 2022 Prabesh Tandukar</p>
        </div>

    </footer>

    <script src="script.js"></script>
    
</body>
</html>