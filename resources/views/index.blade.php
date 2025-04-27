<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <title>Fitness Frick</title>
</head>
<body>

    <!--Header Section-->
    <header>
        <a href="#" class="logo"><span>Fitness</span>Frick</a>
        <div class='bx bx-menu' id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#plans">Pricing</a></li>
            <li><a href="#review">Review</a></li>
        </ul>
        <div class="top-btn">
            <a href="#" class="nav-btn">Join Us</a>
        </div>
    </header>

    <!--Home Section-->
    <section class="home" id="home">
        <div class="home-content" data-aos="zoom-in">
            <h3>Build Your</h3>
            <h1>Dream Physique</h1>
            <h3><span class="multiple-text"></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
            <a href="{{ route('login') }}" class="nav-btn">Join Us</a>
        </div>
        <div class="home-img" data-aos="zoom-in">
            <img src="{{ asset('assets/heroImage.png') }}" alt="Home Image">
        </div>
    </section>

    <!--Service Section-->
    <section class="service" id="services">
        <h2 class="heading" data-aos="zoom-in-down">Our <span>Services</span></h2>
        <div class="services-content" data-aos="zoom-in-up">
            <div class="row"><img src="{{ asset('assets/image1.jpg') }}" alt=""><h4>Physical Fitness</h4></div>
            <div class="row"><img src="{{ asset('assets/image2.jpg') }}" alt=""><h4>Weight Gain</h4></div>
            <div class="row"><img src="{{ asset('assets/image3.jpg') }}" alt=""><h4>Strength Training</h4></div>
            <div class="row"><img src="{{ asset('assets/image4.jpg') }}" alt=""><h4>Fat loose</h4></div>
            <div class="row"><img src="{{ asset('assets/image5.jpg') }}" alt=""><h4>Weight lifting</h4></div>
            <div class="row"><img src="{{ asset('assets/about.jpg') }}" alt=""><h4>Running</h4></div>
        </div>
    </section>

    <!--About Section-->
    <section class="about" id="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="{{ asset('assets/about.jpg') }}" alt="">
        </div>
        <div class="about-content" data-aos="zoom-in-up">
            <h2 class="heading">Why Choose Us?</h2>
            <p>Our diverse membership base creates a friendly and supportive atmosphere...</p>
            <a href="#" class="btn">Book a Free Class</a>
        </div>
    </section>

    <!--Pricing Section-->
    <section class="plans" id="plans">
        <h2 class="heading" data-aos="zoom-in-down">Our <span>Plans</span></h2>
        <div class="plans-content" data-aos="zoom-in-up">
            <div class="box">
                <h3>BASIC</h3><h2><span>$100/Month</span></h2>
                <ul><li>Smart Workout Plan</li><li>At Home Workout</li></ul>
                <a href="#">Join Now<i class='bx bxs-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <h3>PRO</h3><h2><span>$150/Month</span></h2>
                <ul><li>Pro GYMs</li><li>Smart Workout Plan</li><li>At Home Workout</li></ul>
                <a href="#">Join Now<i class='bx bxs-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <h3>PREMIUM</h3><h2><span>$300/Month</span></h2>
                <ul>
                    <li>Elite GYMS & Classes</li>
                    <li>Pro GYMs</li>
                    <li>Smart Workout Plan</li>
                    <li>At Home Workout</li>
                    <li>Personal Trainer</li>
                </ul>
                <a href="#">Join Now<i class='bx bxs-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>

    <!--Review Section-->
    <section class="review" id="review">
        <div class="review-box">
            <h2 class="heading" data-aos="zoom-in-down">Client <span>Reviews</span></h2>
            <div class="wrapper" data-aos="zoom-in-up">
                <div class="review-item">
                    <img src="{{ asset('assets/1.jpg') }}" alt=""><h2>John</h2>
                    <div class="rating">@for ($i = 0; $i < 5; $i++)<i class='bx bxs-star' id="Star"></i>@endfor</div>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
                <div class="review-item">
                    <img src="{{ asset('assets/2.jpg') }}" alt=""><h2>Starc</h2>
                    <div class="rating">@for ($i = 0; $i < 4; $i++)<i class='bx bxs-star' id="Star"></i>@endfor</div>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
                <div class="review-item">
                    <img src="{{ asset('assets/3.jpg') }}" alt=""><h2>David</h2>
                    <div class="rating">@for ($i = 0; $i < 5; $i++)<i class='bx bxs-star' id="Star"></i>@endfor</div>
                    <p>Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin-square'></i></a>
        </div>
        <p class="copyright">
            &copy; FitnessFrick 2025 - All rights reserved by <span>Tusher</span>
        </p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ offset: 300, duration: 1400 });
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
