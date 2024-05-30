

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

    <form action="" class="search-bar-container">
      <input type="search" id="search-bar" placeholder="search here...">
      <label for="search-bar" class="fas fa-search"></label>
    </form>

  </div>

  <div class="header-3">

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
      <ul>
        <li><b><a href="index.php" > <img src="images/house.png" style="width:25px;height:25px;">Home</a></b></li>

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
            <li><a href="clay.html">Clay Post   </a></li>
            <br>
            <li><a href="plactic.php">Plastic Post </a></li>
            <br>
            <li><a href="glass.php">glass pot </a></li>
            <br>
            <li><a href="hanging.php">hanging pot </a></li>
            <br>
            <li><a href="modern.php">Modern Pots</a></li>
            <br>
            <li><a href="birthday.php">BirthDay</a></li>
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





<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

  <h1 class="heading">Clay Pots</h1>

  <div class="box-container">

    <div class="box">

      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img   src="images/C1.png" onmouseover="this.src='images/C2.png';" onmouseout="this.src='images/C1.png';" alt="">
      <h3>FERRUSTICANO `KENZI`</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$8.00</div>
      <a href="#" class="btn"> add to cart</a>
    </div>

    <div class="box">


      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C3.png" onmouseover="this.src='images/C4.png';" onmouseout="this.src='images/C3.png';" alt="">
      <h3>RUSTICANO `KENZI`</h3>
      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$17.00</div>
      <a href="#" class="btn">add to cart</a>
    </div>


    <div class="box">
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C5.png"onmouseover="this.src='images/C6.png';" onmouseout="this.src='images/C5.png';" alt="">
      <h3>CURVY POT</h3>
      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$16.00</div>
      <a href="#" class="btn">add to cart</a>
    </div>



    <div class="box">
      <span class="discount">-10%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C8.png" onmouseover="this.src='images/C7.png';" onmouseout="this.src='images/C8.png';"alt="">
      <h3>CLASSIC TERRACOTTA POT WITH PLATE</h3>
      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$15.00 <span>$20.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>


    <div class="box">
      <span class="discount">-13%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C9.png" alt="">
      <h3>RIGID SAND POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$18.00<span>$25.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C10.png" onmouseover="this.src='images/C11.png';" onmouseout="this.src='images/C10.png';"alt="">
      <h3>FIFI POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>








    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C12.png" onmouseover="this.src='images/C13.png';" onmouseout="this.src='images/C12.png';"alt="">
      <h3>MINI KATJA POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>


    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C14.png" onmouseover="this.src='images/C15.png';" onmouseout="this.src='images/C14.png';"alt="">
      <h3>RAMA</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>
    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C16.png" onmouseover="this.src='images/C17.png';" onmouseout="this.src='images/C16.png';"alt="">
      <h3>COBALT BLUE POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>




    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C18.png" onmouseover="this.src='images/C19.png';" onmouseout="this.src='images/C18.png';"alt="">
      <h3>SKY BLUE POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C20.png" onmouseover="this.src='images/C21.png';" onmouseout="this.src='images/C20.png';"alt="">
      <h3>TERRAZZO PINK POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>








    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C22.png" onmouseover="this.src='images/C23.png';" onmouseout="this.src='images/C22.png';"alt="">
      <h3>BEIGE CYLINDER POT</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>


    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C24.png" onmouseover="this.src='images/C25.png';" onmouseout="this.src='images/C24.png';"alt="">
      <h3>ROCCA</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>


    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/C26.png" onmouseover="this.src='images/C27.png';" onmouseout="this.src='images/C26.png';"alt="">
      <h3>RECTANGULAR ZALAAH</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
      <span class="discount">-20%</span>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-share"></a>
        <a href="#" class="fas fa-eye"></a>
      </div>
      <img src="images/CC1.png" onmouseover="this.src='images/CC2.png';" onmouseout="this.src='images/CC1.png';"alt="">
      <h3>ZALAAH</h3>

      <div class="quantity">
        <span> quantity : </span>
        <input type="number" min="1" max="100" value="1">
      </div>
      <div class="price">$20.00 <span>$28.00</span></div>
      <a href="#" class="btn">add to cart</a>
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





<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

  <div class="box-container">

    <div class="box">
      <h3>about us</h3>
        <p>A website that helps you enjoy with a nice plant and can you take a Gift for all event. We are glad you are using our website</p>    </div>
    <div class="box">
      <h3>branch locations</h3>
      <a href="#">Jenin</a>
      <a href="#">Tulkarm</a>
      <a href="#">Ramallah</a>

    </div>
    <div class="box">
      <h3>quick links</h3>
      <a href="#">home</a>
      <a href="#">category</a>
      <a href="#">Plant</a>
      <a href="#">Post&Planters</a>
      <a href="#">Gift</a>
      <a href="#">Garden Supplies</a>
      <a href="#">contact</a>
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

</body>
</html>