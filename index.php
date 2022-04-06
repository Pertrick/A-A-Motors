<?php
session_start();

?>
<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, user-scable=no, initail-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA- Compatible" content="Ie=edge">
        <title>A&A Motors</title>

        <link rel ="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

        <script src = "https://unpkg.com/scrollreveal"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="public/css/style.css">
    </head>

    <body class="opn">
        
        <header>
            <div class="container">
                <nav class="nav">
                    <div class = "menu-toggle">
                        <i class = "fas fa-bars"></i>
                        <i class = "fas fa-times"></i>
                    </div>
                    <h1><a href="index.php" class="brand">A & A <span>Motors</span></a></h1>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>

                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">About</a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Features</a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Gallery</a>
                            
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">Shop</a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Contact</a>
                            
                        </li>

                    </ul>
                </nav>

            </div>
        </header>

        <!--end of header-->

        <section class="hero" id="hero">
            <div class="container">
                <h2 class="sub-headline">
                    <span class="first-letter"></span>
                </h2>
                <h1 class="headline">Best Car Sales</h1>
                <div class="headline-description">
                <div class="seperator">
                    <div class="line line-left"></div>
                    <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    <div class="line line-right"></div>

                </div>

                <div class="single-animation">
                    <h5>Ready to be opened</h5>
                    <?php
                        if(isset($_SESSION['login'])){
                            echo "<a href='home.php' class='btn cta-btn'>Home</a>";
                        }else{
                            echo "<a href='login.php' class='btn cta-btn'>Login / Register</a>";
                        }
                    ?>
                   
                </div>
                </div>
            </div>
        </section>
        <!--hero ends-->

        <section class="discover-our-story">
            <div class="container">
                <div class="restaurant-info">
                    <div class="restaurant-description padding-right animate-left">
                        <div class="global-headline">
                            <h2 class="sub-headline">
                                <span class="first-letter">D</span>iscover
                            </h2>
                            <h1 class="headline headline-dark">Our Story</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>
                        <p>
                            With more than 10 years of selling quality cars to our customers, We at A & A Motors are known
                            to offer customers quality, exotic and best brands of car that suits their personality, work and life style.
                            Our Customer relationship is top notch because we are here to serve you better deals whenever, wherever, however! 
                            </p>
                        <a href="" class="btn body-btn">About us</a>

                    </div>
                    <div class = "restaurant-info-img animate-right">
                        <img src="public/images/g2.jpg" alt="">
                    </div>
                </div>
            </div>

        </section>
        <!--Discover story Ends-->

        <section class= "tasteful-recipes between">

            <div class="container">
                <div class="global-headline">
                    <div class="animate-top">
                        <h2 class="sub-headline">
                            <span class="first-letter">E</span>xquisite
                        </h2>
                        <div class="animate-bottom">
                            <h1 class="headline "> & <br> Exotic</h1>  
                        </div>
                    </div>
            </div>
        </section>

        <!--Tasteful Recipies Ends-->
        <section class="discover-our-menu">
            <div class="container">
                <div class="restaurant-info">
                    <div class="image-group padding-right animate-left">
                        <img src="public/images/g1.jpg" alt="">
                        <img src="public/images/background.jpg" alt="">
                        <img src="public/images/g5.jpg" alt="">
                        <img src="public/images/g3.jpg" alt="">
                    </div>
                    <div class="restaurant-description animate-right">
                        <div class="global-headline">
                
                            <h1 class="headline headline-dark">Best Brands</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                    </div>
                    <p> Our cars are of best quality. ranging from different brands. Rolls Royce, Bugatti, Lambogini, Porshe, Jaguar, Maseratti, Toyota, Mercedes Benz, Mazda and lot more.   
                    </p>
                    <a href="#" class="btn body-btn">view the full Gallery</a>
                </div>
            </div>
        </section>
        <!--discover Menu ends-->

        <section class= "perfect-blend between">

            <div class="container">
                <div class="global-headline">
                    <div class="animate-top">
                        <h2 class="sub-headline">
                            <span class="first-letter">T</span>he perfect 
                        </h2>
                        <div class="animate-bottom">
                            <h1 class="headline headline-dark ">Blend</h1>  
                        </div>
                    </div>
            </div>
        </section>
        <!--perfect blend ends-->

        <section class="culinary-delight">
            <div class="container"><a name="delight"></a>
                <div class="restaurant-info">
                    <div class="restaurant-description padding-right animate-left">
                        <div class="global-headline">
                            <h1 class="headline headline-dark">
                                Great Interior
                            </h1>
                    
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>
                        <p>
                        A Mazda interior represents the unmistakable bond between driver and car. 
                        Every detail is expertly crafted, every component intuitively placed, creating a feeling of enveloping comfort that 
                        makes every journey more inspiring.
                            </p>
                        <a href="" class="btn body-btn">Place your Order</a>

                    </div>
                    <div class = "image-group">
                        <img class = "animate-top" src="public/images/interior1.jpg" alt="">
                        <img class = "animate-bottom" src="public/images/interior2.jpg" alt="">
                        
                    </div>
                </div>
            </div>
        </section>
        <!--culinary Delight Ends-->

        <footer>
            <div class="container">
                <div class="back-to-top">
                    <a href="#hero"><i class="fas fa-chevron-up"></i></a>
                </div>
                <div class="footer-content">
                    <div class="footer-content-about animate-top">
                        <h4>A&A Motors</h4>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <p>
                           
                    For questions about our product and services, please call 1-878-3227  or email us @ a&amotors@gmail.com

                        </p>
                    </div>
                    <div class="footer-content-divider animate-bottom">
                        <div class="social-media">
                            <h4>Follow</h4>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>

                            </ul>
                        </div>
                        <div class = "newsletter-container">
                            <h4>Newsletter</h4>
                            <form action="" class="newsletter-form">
                                <input type="text" class="newsletter-input" placeholder="Enter your E-mail">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fas fa-envelope"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <p> All rights reserved. Copyright &copy; <?=date('Y'); ?> A&A Motors</p>
                </div>
            </div>
        </footer>

        



        <script src="js/main.js"></script>

    
    </body>
</html>