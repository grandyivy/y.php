<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>We are thrilled to introduce Stated Company, a vibrant new community designed to foster connection and modern living.
            Our comprehensive real estate website offers a powerful search engine, detailed property listings, and virtual tours. Stay up-to-date with the latest market trends and connect with experienced real estate agents directly through the platform."    
        </p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p>See all available properties in your desired area,Get all the details you need about each property, including photos, descriptions, and virtual tours</p>
         <a href="#">Learn More</a> 
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Get in Touch with Our Experts.</p>
         <a href="#">Learn More</a>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>property locator</h3>
         <p>Find your dream home fast with our powerful property locator. Simply enter your search criteria and let us guide you to the perfect property.</p>
         <a href="#">Learn More</a>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">What our Clients Are Saying</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>Salim Amdi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>We were first-time homebuyers and the whole experience feel manageable.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Rawdat Hamat</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I had the best experience and the houses are worth the amount.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Sumaya Aisha</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>The standard steps were all done well, and he also dealt with some unexpected buyer ...</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Abdul Mohammed</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I ended up in the perfect place with his able assistance.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Amdi Swallah</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>The company was very responsive, would quickly provide information and work her magic to ...</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Edward Omar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>She has countless times help me buy and sell my homes here in Tudor for over a period of time</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>