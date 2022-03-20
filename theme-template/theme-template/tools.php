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
    </head>
    <body>
        <div class="header-container">
            <div class="search-top-container">
                <div class="search-container">
                    <h1>Find Digital Products to Aid Your Works</h1>
                    <div>
                        <select>
                            <option value="automation">Automation</option>
                            <option selected value="leadgen">Lead Generation</option>
                            <option value="graphicsdesign">Graphics Design</option>
                            <option value="videoediting">Video Editing</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Research">Research</option>
                            <option value="sciencesoftware">Science Software</option>
                            <option value="crytocurry">Crytocurry</option>
                            <option value="nft">NFT</option>
                            <option value="engineering">Engineering</option>
                            <option value="digital">Digital Marketing</option>
                        </select>
                    </div>
                    <div><input type="text" name="search" /></div>
                    <div><button>Search</button></div>
                </div>
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
                    <a href="index.php" class="logo-img" ><img src="images/fabcodemedia.jpg" /></a>
                    <a class="active" href="#"><i class="fa fa-home"></i><span>Home</span></a>
                    <a href="#"><i class="fa fa-search"></i><span>Search</span></a>
                    <a href="#"><i class="fa-brands fa-product-hunt"></i><span>New Products</span></a>
                    <a href="#"><i class="fa-solid fa-toolbox"></i><span>Helpful Tools</span></a>
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
                <div class="tools-main-body-container">
                    <div>
                        <h2 class="tool-heading">Effective Tools for Successful<br> Online Business</h2>
                        <p>We offer you a carefully researched tools to help you and your business run a successful online business</p>
                    </div>
                    <div class="gaphic-design-tools">
                        <div class="freemium-tools">
                            <h2>Freemium</h2>
                            <div class="img-price-title">
                                <div>
                                    <img src="">
                                </div>
                                <div class="tool-price">
                                    &dollar;10
                                </div>
                                <div class="tool-title">
                                    <h3>Photoshop</h3>
                                </div>
                            </div>
                            <div class="sub-title-desc">
                                <h4>Features/Uses</h4>
                                <p>Any short description goes in here</p>
                                <ul>
                                    <li>Easy to use</li>
                                    <li>Cost less</li>
                                    <li>Free version</li>
                                    <li>Easy to use</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </grid> -->
                <div class="ads-display">
                    <div class="ads-container">
                        <div class="ad-item"></div>
                        <div class="ad-item"></div>
                        <div class="ad-item"></div>
                        <div class="ad-item"></div>
                        <div class="ad-item"></div>
                        <div class="ad-item"></div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Footer -->
         <div class="footer">
            <p>Copyright &copy; <?php echo date('Y'); ?> | FabCodeMedia</p>
            <ul>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
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
            let txt1 = 'Hot Products';
            let speed = 50;

            function typeWriting() {
            if (i < txt1.length) {
                document.querySelector('.element').innerHTML += " " + txt1.charAt(i);
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
                hamburger.classList.toggle('change-ham-position');
            }
            
        </script>
    </body>
</html>