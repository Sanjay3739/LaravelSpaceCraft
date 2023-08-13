<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header.css')}}" />
    <title>Responsive Animated Navbar</title>
</head>
<body>
    <nav class="d-flex">
        <div class="logo">
            <img src="https://icons.iconarchive.com/icons/martz90/circle/128/bs-player-icon.png" width="100" height="100">
            {{-- <img src={{ asset('Images/bs.jpg') }} alt=""> --}}
            {{-- <img class="img-fluid" src="images/q_bs.png" alt="alternative">  --}}
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>  
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
          <a href="{{ route('loginview') }}" class="login-button" id="login">Login</a>
             <a href="{{ route('loginview') }}" class="login-button " id="register">Register</a>
        </ul>
    </nav>
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const links = document.querySelectorAll(".nav-links li");
        hamburger.addEventListener('click', () => {
            //Animate Links
            navLinks.classList.toggle("open");
            links.forEach(link => {
                link.classList.toggle("fade");
            });
            //Hamburger Animation
            hamburger.classList.toggle("toggle");
        });
    </script>
</body>
