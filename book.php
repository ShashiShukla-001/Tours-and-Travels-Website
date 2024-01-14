<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
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

<div class="heading" style="background:url(images/book-now-header.jpg)no-repeat">
    <h1>Book Now</h1>
</div>


<!--booking section -->
<section class="booking">
    <h1 class="heading-title">Book Your Trip!!</h1>

    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name : </span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email : </span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone : </span>
                <input type="number" placeholder="enter your phone no." name="phone">
            </div>
            <div class="inputBox">
                <span>address : </span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to : </span>
                <input type="text" placeholder="travel destination" name="location">
            </div>
            <div class="inputBox">
                <span>how many: </span>
                <input type="number" placeholder="no. of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrival : </span>
                <input type="date"  name="arrival">
            </div>
            <div class="inputBox">
                <span>departure : </span>
                <input type="date"  name="departure">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!--booking section end-->







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