
<?php
$connect = mysqli_connect("localhost", "root", "", "final");
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>complete responsive plant selling website design tutorial</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css">

</head>
<body>
<script src=" https://smtpjs.com/v3/smtp.js"> </script>
<script>


    function sendEmail() {
        Email.send({
            SecureToken: "kesqazyelprkzslj", // Use an App Password if 2-step verification is enabled
            To: 'halajabe2002@gmail.com',
            From: document.getElementById("email").value,
            Subject: "This is from web project",
            Body: "Name: " + document.getElementById("name").value +
                "<br>Email: " + document.getElementById("email").value +
                "<br>Msg: " + document.getElementById("msg").value,
            Host: "smtp.gmail.com",
            Username: "webhalaproject@gmail.com",
            Password: "halamalk2002",
            EnableSsl: true,
            Port: 465
        }).then(function (message) {
            if (message === "OK") {
                alert("Message sent successfully");
            } else {
                alert("Error: " + message);
            }
        });
    }


</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- header section starts facebook,... -->

<header>

  <div class="header-1">

    <div class="share">
      <span> follow us : </span>
      <a href="#" class="fab fa-facebook-f"> </a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>

    </div>

    <div class="call">
      <span> call us : </span>
      <a href="#">0598088990</a>
    </div>

  </div>

  <div class="header-2">

    <a href="#" class="logo">   <img src="images/plant%20(2).png" alt=""><i class="fas fa-band-aid"></i> Mashtal </a>

    <form   action="" class="search-bar-container">
      <input  name="keywords" type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
        <input type="submit"   name = "search_img" style ="
        z-index: 3; width:20px;height:20px; top:-340px;position: relative;left:155px;border-radius: 10px;">
    </form>

  </div>








  <div class="header-3">

    <div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar">
      <ul>
        <li><b><a href="index.html" > <img src="images/house.png" style="width:25px;height:25px;">Home</a></b></li>

        <li><b> <a href="#category"><img src="images/search.png" style="width:25px;height:25px;">category</a></b></li>

        <li> <b> <a href="#Plant"><img src="images/plant.png" style="width:25px;height:25px;">Plant  <img src="images/down.png" style="width:10px;height:10px;"></a></b>
          <ul class ="dropdown" style="width:180px; height:250px;">
            <li><a ><img src="images/ma.png" style="width:180px;height:150px;"></a></li>
            <li><a style=" color: #257928BA">_________________</a></li>
            <li><a href="PLANTS.php"> plants</a></li>
            <li><a href="seed.php">Seeds</a></li>
            <li><a href="flowers.php">Flowers</a></li>
          </ul>
        </li>


        <li> <b><a href="#Pots&Planters"><img src="images/spider-plant.png" style="width:25px;height:25px;">Pots&Planters    <img src="images/down.png" style="width:10px;height:10px;"></a></b>
          <ul class ="dropdown">
            <li><a ><img src="images/j.png" style="width:180px;height:150px;"></a></li>
            <li><a style=" color: #257928BA">_________________</a></li>
            <li><a href="clay.php">Clay Post   </a></li>
            <br>
            <li><a href="plactic.php">Plastic Post </a></li>
            <br>
            <li><a href="glass.php">glass pot </a></li>
            <br>
            <li><a href="hanging.php">hanging pot </a></li>
            <br>
            <li><a href="modern.php">Modern Pots</a></li>
            <br>

          </ul>
        </li>

        <li> <b><a href="GardenSupplies.php"><img src="images/gardening-tools.png" style="width:25px;height:25px;">Garden Supplies</a></b></li>
        <li>  <b><a href="#Gift"> <img src="images/plant-pot.png" style="width:25px;height:25px;">Gifts <img src="images/down.png" style="width:10px;height:10px;"></a></b>
          <ul class ="dropdown" style="width:180px; height:300px;" >
            <li><a ><img src="images/br11.jpg" style="width:180px;height:150px;"></a></li>
            <li><a style=" color: #257928BA">_________________</a></li>
            <li><a href="wedding.php">wedding</a></li>
            <br>
            <li><a href="newbaby.php">New Baby</a></li>
            <br>
            <li><a href="birthday.php">BirthDay</a></li>
            <br>
          </ul>

        </li>
        <li> <b><a href="#contact"><img src="images/contact-mail.png" style="width:25px;height:25px;">Contact</a></b></li>
      </ul>
    </nav>
    <div class="icons">
      <a href="test2.php" class="fas fa-shopping-cart"></a>
      <a href="#" class="fas fa-heart"></a>
      <a href="reg_sign.php" class="fas fa-user-circle"></a>
    </div>

  </div>

</header>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

  <div class="swiper-container home-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="box" style="background: url(images/slider1.jpg);">
          <div class="content">
            <span>upto 75% off</span>
            <h3>plant big sale special offer</h3>
            <a href="#" class="btn">shop now</a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="box" style="background: url(images/slider2.jpg);">
          <div class="content">
            <span>upto 45% off</span>
            <h3>plant make people happy</h3>
            <a href="#" class="btn">shop now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="box" style="background: url(images/slider3.jpg);">
          <div class="content">
            <span>upto 65% off</span>
            <h3>decorate your home now</h3>
            <a href="#" class="btn">shop now</a>
          </div>
        </div>
      </div>


    </div>


    </div>

    <div class="swiper-pagination"></div>

  </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

  <div class="banner">
    <img src="images/banner1.jpg" alt="">
    <div class="content">
      <span>new arrivals</span>
      <h3>house plants</h3>
      <a href="flowers.php" class="btn">shop now</a>
    </div>
  </div>
  <div class="banner">
    <img src="images/banner2.jpg" alt="">
    <div class="content">
      <span>new arrivals</span>
      <h3>office plants</h3>
      <a href="indoor_plant.php" class="btn">shop now</a>
    </div>
  </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

  <h1 class="heading"> shop by category </h1>

  <div class="box-container">

    <div class="box">
      <img src="images/fin8.png" alt="">
      <div class="content">
        <h3>Garden Supplies</h3>
        <a href="GardenSupplies.php" class="btn">shop now</a>
      </div>
    </div>
    <div class="box">
      <img src="images/cat2.jpg" alt="">
      <div class="content">
        <h3>plants for house</h3>
        <a href="indoor_plant.php" class="btn">shop now</a>
      </div>
    </div>
    <div class="box">
      <img src="images/cat3.jpg" alt="">
      <div class="content">
        <h3>Pots for office</h3>
        <a href="modern.php" class="btn">shop now</a>
      </div>
    </div>
    <div class="box">
      <img src="images/f4jpg.jpg" alt="">
      <div class="content">
        <h3>gift plants</h3>
        <a href="wedding.php" class="btn">shop now</a>
      </div>
    </div>

  </div>

</section>


<!-- product section ends -->

<!-- .icons section starts  -->

<section class="icons-container">

  <div class="icon">
    <img src="images/icon1.png" alt="">
    <div class="content">
      <h3>free shipping</h3>
      <p>Free shipping on order</p>
    </div>
  </div>
  <div class="icon">
    <img src="images/icon2.png" alt="">
    <div class="content">
      <h3>100% Money Back</h3>
      <p>You’ve 30 days to Return</p>
    </div>
  </div>
  <div class="icon">
    <img src="images/icon3.png" alt="">
    <div class="content">
      <h3>Payment Secure</h3>
      <p>100% secure payment</p>
    </div>
  </div>
  <div class="icon">
    <img src="images/icon4.png" alt="">
    <div class="content">
      <h3>Support 24/7</h3>
      <p>Contact us anytime</p>
    </div>
  </div>

</section>



<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

  <h1 class="heading">get in touch</h1>

  <div class="row">

   <iframe class="map"  src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3375.6337969321007!2d35.271351075143144!3d32.21409697390384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ce0ecb56421a3%3A0x9e7f39466322ba13!2sNablus!5e0!3m2!1sen!2s!4v1690637205940!5m2!1sen!2s"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"

    <form  onsubmit="sendEmail();reset(); return false;"action="">

      <div class="inputBox">
        <input type="text" required>
        <label>name</label>
      </div>
      <div class="inputBox">
        <input type="email" id="email"required>
        <label>email</label>
      </div>
      <div class="inputBox">
        <input type="number" required>
        <label>number</label>
      </div>
      <div class="inputBox">
        <textarea required name="" id="name" cols="30" rows="10"></textarea>
        <label>message</label>
      </div>

      <input type="submit"  id ="msg"value="send message" class="btn">

    </form>

  </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

  <div class="box-container">

    <div class="box">
      <h3>about us</h3>
      <p>A website that helps you enjoy with a nice plant and can you take a Gift for all event. We are glad you are using our website </p>
    </div>
    <div class="box">
      <h3>branch locations</h3>
      <a href="#">Jenin</a>
      <a href="#">Tulkarm</a>
      <a href="#">Ramallah</a>

    </div>
    <div class="box">
      <h3>quick links</h3>
      <a href="index.php">home</a>

      <a href="PLANTS.php">Plant</a>
      <a href="modern.php">Post&Planters</a>
      <a href="newbaby.php">Gift</a>
      <a href="GardenSupplies.php">Garden Supplies</a>

    </div>
    <div class="box">
      <h3>follow us</h3>
      <a href="#">facebook</a>
      <a href="#">twitter</a>
      <a href="#">instagram</a>

    </div>

  </div>

  <h1 class="credit"> created by <span> Hala jabi & Malak Jawabreh</span> </h1>

</section>

<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="scroll-top fas fa-angle-up"></a>



-->

















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
<!-- Add this to your existing script.js -->


</body>
</html>