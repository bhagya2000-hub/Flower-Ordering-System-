<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p> Because we're committed to turning your moments into cherished memories with the freshest blooms and a touch of artistic creativity."</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>An exquisite selection of handpicked, fresh flowers and personalized floral arrangements to brighten every occasion in your life."</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p> A passionate team of florists dedicated to bringing nature's beauty into your life through stunning floral creations and exceptional service."</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/1.jpg" alt="">
            <p>Absolutely stunning arrangements! I ordered flowers for my anniversary, and my wife was over the moon. The quality and freshness were exceptional. We'll definitely be returning customers.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Zaara</h3>
        </div>

        <div class="box">
            <img src="images/2.jpg" alt="">
            <p>I can't say enough about the exceptional service at this flower shop. The team was incredibly helpful in creating a custom bouquet for my daughter's graduation. It made her day truly special. Thank you!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dezi Ayz</h3>
        </div>

        <div class="box">
            <img src="images/3.jpg" alt="">
            <p>The flowers from this shop are a work of art. The arrangements are not only beautiful but also long-lasting. I've never been disappointed with their selection. I love this service..Highly recommended!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Madhux Ru</h3>
        </div>

        <div class="box">
            <img src="images/4.1.jpg" alt="">
            <p>This flower shop goes above and beyond. They helped me choose the perfect flowers for my wedding, and the arrangements were breathtaking. I couldn't have asked for a better experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Meliza Dew</h3>
        </div>

        <div class="box">
            <img src="images/4.jpg" alt="">
            <p>I appreciate the eco-friendly approach of this flower shop. Their commitment to using locally sourced and sustainable flowers is commendable. Plus, the floral designs are always unique and eye-catching. Kudos to them!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Bhagya SD</h3>
        </div>

        <div class="box">
            <img src="images/6.jpg" alt="">
            <p>The staff's passion for flowers is evident in every arrangement they create. Whether it's for a special occasion or just to brighten someone's day, they consistently deliver beauty and joy. Highly impressed and highly recommended!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Amendus</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>