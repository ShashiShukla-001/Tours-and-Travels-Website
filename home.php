<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!--swiper css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--header section-->
<section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar">
        <a href="home.php" >home</a>
        <a href="about.php" >about</a>
        <a href="package.php" >package</a>
        <a href="book.php" >book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--header section end-->

<!--home section-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slider/desert.jpg)">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Travel Around The World</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:linear-gradient(
          rgba(0, 0, 0, 0.15), 
          rgba(0, 0, 0, 0.15)
        ),url(images/home-slider/beach.jpg)">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Discover New Places</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:linear-gradient(
          rgba(0, 0, 0, 0.15), 
          rgba(0, 0, 0, 0.15)
        ),url(images/home-slider/icy.jpg)">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Make Your Tour Worthwhile</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!--home section end-->

<!--services section end-->
<section class="services">
    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/services-images/adventure.png" alt="">
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <img src="images/services-images/tour guide.png" alt="">
            <h3>Tour Guide</h3>
        </div>
        <div class="box">
            <img src="images/services-images/trekking.png" alt="">
            <h3>Trekking</h3>
        </div>
        <div class="box">
            <img src="images/services-images/bonfire.png" alt="">
            <h3>Camp Fire</h3>
        </div>
        <div class="box">
            <img src="images/services-images/offroad.png" alt="">
            <h3>Off Road</h3>
        </div>
        <div class="box">
            <img src="images/services-images/camping.png" alt="">
            <h3>Camping</h3>
        </div>
    </div>
</section>
<!--sevices section end-->

<!--home about section-->
<section class="home-about">
    <div class="home-about-image">
        <img src="images/about-us/about-us-img.jpg" alt="">
    </div>
    <div class="home-about-content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis porro iusto quo dicta? Suscipit, voluptate eligendi illo, nemo dolore consequatur quam nihil officia hic labore odio obcaecati pariatur excepturi exercitationem.</p>
        <a href="about.php" class="btn">Read More</a>
    </div>
</section>
<!--home about section end-->

<!--home packages section -->
<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        
        <div class="box">
            <div class="image">
                <img src="images/packages/1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, temporibus!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages/2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, temporibus!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/packages/3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & Tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, temporibus!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

    </div>
   
    <div class="load-more">
            <a href="package.php" class="btn">Load more</a>
    </div>

</section>
<!--home packages section end-->

<!--home offer section start-->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, provident necessitatibus dolore distinctio odio velit alias tempore fugit tenetur quibusdam?</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</section>
<!--home offer section end-->


<!--footer section-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php" ><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php" ><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php" ><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php" ><i class="fas fa-angle-right"></i>book</a>
        </div>
        <div class="box">
            <h3>Extra Links</h3>
            <a href="#" ><i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="#" ><i class="fas fa-angle-right"></i>About Us</a>
            <a href="#" ><i class="fas fa-angle-right"></i>Privacy Policy</a>
            <a href="#" ><i class="fas fa-angle-right"></i>Terms Of Use</a>
        </div>
        <div class="box">
            <h3>Contact Information</h3>
            <a href="#" ><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#" ><i class="fas fa-phone"></i>+000-111-222</a>
            <a href="#" ><i class="fas fa-envelope"></i>Tin-Tin-Travels@gmail.com</a>
            <a href="#" ><i class="fas fa-map"></i>Uttar Pradesh, India - 201XXX</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
    </div>
</section>
<!--footer section end-->

<!--swiper js -->  
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--js-->
<script src="js/script.js"></script>
</body>
</html>