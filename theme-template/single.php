<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fabulous Code Media</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700;800&display=swap" rel="stylesheet">
        <!-- Own CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/single.page.css">
    </head>
    <body>
        <div class="single-header-container">
            <div class="single-top-container">
                <img src="images/fabcodemedia-version2.jpg">
            </div>
        </div>
        <div class="body-container">
            <!-- Hamburger -->
            <div class="ham-ext-container">
                <div class="ham-container" onclick="menu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <!-- Side section -->
            <div class="aside-container">
                <div class="icon-bar">
                    <a href="index.php" class="logo-img"><img src="images/fabcodemedia.jpg" /></a>
                    <a class="active" href="#"><i class="fa fa-home"></i><span>Home</span></a>
                    <a href="#"><i class="fa fa-search"></i><span>Search</span></a>
                    <a href="#"><i class="fa-brands fa-product-hunt"></i><span>New Products</span></a>
                    <a href="#"><i class="fa-solid fa-fire-flame-curved"></i><span>Products</span></a>
                    <a href="#"><i class="fa-solid fa-bullhorn"></i><span>Launches</span></a>
                    <a href="#"><i class="fa-solid fa-blog"></i><span>Blog</span></a>
                    <a href="#"><i class="fa fa-trash"></i><span>Old Products</span></a>
                    <div class="vartical-social">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- Main Body & Grid -->
            <div class="main-body">
                <div class="product-title">
                    <h1>Product title goes here</h1>
                </div>
                <div class="main-body-container">
                    <div class="single-container">
                        <div class="single-sec-1">
                            <div class="single-prod-img single-col-6">
                                <img src="https://images.unsplash.com/photo-1642388538891-38b2d14e750e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80">
                            </div>
                            <div class="single-col-6">
                                <div class="single-prod-title">
                                    <h3>Lead Generation Software Gear for effective funnel</h3>
                                </div>
                                <div class="single-prod-text">
                                    <p>
                                        If your Running Ads on Facebook, Instagram and Google.... Twitter is an Awesome Addition to Market on for Your Business!!
                                        Use Twitter to Engage and Interact with Like Minded Business Owners and Entrepreneurs
                                    </p>
                                </div>
                                <div class="single-cta-btn">
                                    <button>Grab this Product + Bonus Here!</button>
                                </div>
                                <div class="single-rating">
                                    &#9733; &#9733; &#9733; &#9734; &#9734; (0)
                                </div>
                            </div>
                        </div>
                        <!-- Section 2 -->
                        <div class="single-sec-2">
                            <div class="single-sec-2-title">
                                <h2>Watch the Demo Video</h2>
                                <p>Plus you get Access to Our Exclusive Membership Area Packed with Training</p>
                            </div>
                            <div class="single-sec-2-demo">
                                <div class="col-4">
                                    <h2>See How it works</h2>
                                    <p></p>
                                </div>
                                <div class="col-8">
                                    <video width="900" controls>
                                        <source src="images/cat.mp4" type="video/mp4">
                                        <source src="images/cat.mp4" type="video/ogg">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                            </div>
                            <div class="single-sec-2-cta">
                                <button>Grab this plus bonus here!</button>
                            </div>
                        </div>
                        <!-- Section 3 -->
                        <div class="single-sec-3">
                            <div class="single-sec-3-header">
                                <h2>10 Done For You Bonuses Already Included</h2>
                                <p>Get Started Today With 10 Done For You Bonuses Ready To Use On Any Promotion!</p>
                            </div>
                            <div class="single-page-bonus">
                                <div><img src="images/bonus.jpg"></div>
                                <div><img src="images/bonus.jpg"></div>
                                <div><img src="images/bonus.jpg"></div>
                                <div><img src="images/bonus.jpg"></div>
                                <div><img src="images/bonus.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/1b0b5223cb.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <!-- <script src="js/main.js"></script> -->
        <script>

            // var typed = new Typed('.element', {
            //     strings: ["New Digital Products", "Hot Digital Products"],
            //     typeSpeed: 50
            // });

            let i = 0;
            let txt1 = 'Hot';
            let speed = 50;

            function typeWriting() {
            if (i < txt1.length) {
                document.querySelector('.element').innerHTML += txt1.charAt(i);
                i++;
                setTimeout(typeWriting, speed);
            }
            };

            window.onload = () => {
                typeWriting();
            };

            let showAside = document.querySelector('.body-container');
            let hamburger = document.querySelector('.ham-ext-container');

            function menu(x) {
                x.classList.toggle("change");
                showAside.classList.toggle('show-aside');
                hamburger.classList.toggle('.change-ham-position');
            }
            
        </script>
    </body>
</html>