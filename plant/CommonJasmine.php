

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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- header section starts facebook,... -->

<header>
  <style>
    .main-wrapper{
      background-color: #f1f1f1;
    }

    .product-div{
      margin: 1rem 0;
      padding: 2rem 0;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      background-color: #fff;
      border-radius: 3px;
      column-gap: 10px;
    }
    .product-div-left{
      padding: 20px;
    }
    .product-div-right{
      padding: 20px;
    }
    .img-container img{
      width: 600px;
      height: 500px;
      border: black solid 4px;
      margin: 0 auto;
    }


    .product-div-right span{
      display: block;
    }
    .product-name{
      font-size: 26px;
      margin-bottom: 22px;
      font-weight: 700;
      letter-spacing: 1px;
      opacity: 0.9;
    }
    .product-price{
      font-weight: 700;
      font-size: 24px;
      opacity: 0.9;
      font-weight: 500;
    }


    .product-description{

      font-weight:18;
      line-height: 1.6;
      font-weight: 300;
      opacity: 0.9;
      margin-top: 22px;
    }
    .btn-groups{
      margin-top: 22px;
    }
    .btn-groups button{
      display: inline-block;
      font-size: 16px;
      font-family: inherit;
      text-transform: uppercase;
      padding: 15px 16px;
      color: #fff;
      cursor: pointer;
      transition: all 0.3s ease;
    }


    .add-cart-btn:hover{
      background-color: #fff;
      color: #FF9F00;
    }

    .buy-now-btn:hover{
      background-color: #fff;
      color: #000;
    }

    .product-div-right h6
    {
      font-size: 20px;
      color: gray;
    }
    .product-div-right h3
    {
      font-size: 30px;
      color: green;
    }

    .product-div-right .product-description
    {
      font-size: 17px;
      color: black;
    }

    .product-div-right .product-price
    {
      font-size: 25px;
      color: red;
      font-weight: bold;
    }

    .btn-groups input
    {
      color: black;
      font-weight: bold;
      width: 130px;
      height: 55px;
      padding-left: 10px;
      font-size:18px;
      margin-left: 10px;
      background-color: #257928BA;
      border-radius: 15px ;
      border: black solid 3px;
      text-align: center;
    }
    .btn-groups input:hover
    {
      background-color:white;
    }

    .btn-groups .add-cart-btn
    {
      color: black;
      width: 150px;
      font-weight: bold;
      height: 60px;
      padding-left: 10px;
      font-size:15px;
      margin-left: 10px;
      background-color:gray;
      border-radius: 15px ;
      border: black solid 3px;
    }
    .btn-groups .add-cart-btn:hover
    {
      background-color:white;
    }
    .btn-groups .buy-now-btn
    {
      color: black;
      font-weight: bold;
      width: 130px;
      height: 55px;
      padding-left: 10px;
      font-size:15px;
      margin-left: 10px;
      background-color:#257928BA;
      border-radius: 15px ;
      border: black solid 3px;
    }

    .btn-groups .buy-now-btn:hover
    {
      background-color:white;
    }
    table,tr
    {
      border-right: 2px solid black;
      border-left: 2px solid black;
      border-top: 2px solid black;
      border-bottom: 2px solid black;
      width:50% ;
      margin-left: auto;
      margin-right: auto;
      border-collapse: collapse;
      font-size: 16px;
      align-content: center;
    }
    .h1{
      font-size: 30px;
      text-align: center;
      color: red;
      font-weight: bold;
    }
    th{
      font-size: 20px;
      padding: 10px;
      width: 5%;
      color: darkgreen;
      font-weight: bold;

    }
    td {

      padding: 10px;
      width: 5%;
      font-weight: bold;

    }
    table .imgs{
      width: 5%;
      text-align: center;
    }





  </style>
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

<section>

    <div class = "main-wrapper">
        <?php
        $sql = "SELECT id FROM product where name='Common Jasmine' ";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="test2.php?action=add&id=<?php echo $row["id"];?>">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "images/CLIMBER3.jpg" width="400" height="300" alt = "watch">
                    </div>

                </div>
                <div class = "product-div-right">
                    <h6 class="h6"> CLIMBER</h6>
                    <h3 class="h3"> Common Jasmine</h3>
                    <br>
                    <span class = "product-price"> Price : $50.25</span>
                    <br>
                    <input type="hidden" name="hidden_name" value="Common Jasmine" />

                    <input type="hidden" name="hidden_price" value="50.25" />


                    <p class = "product-description">  <b>product-description :</b>
                        <br>Gardenia is an evergreen shrub with glossy dark green leaves and its well known for its waxy white extremely fragrant flowers.
                    </p>

                    <div class = "btn-groups">
                        <input type="number" name="quantity" value="1" min="1" max="100">
                        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="add" />
                    </div>
                </div>
            </div>
        </form>
    </div>
    <h1 class="h1"> Details For Product</h1>
    <BR>
    <table>

        <tr>
            <th>Scientific Name </th>
            <td>Gardenia</td>
            <td class="imgs"><img src="images/name.png" width="50px"></td>
        </tr>

        <tr>
            <th>Growth Cycle </th>
            <td> Evergreen</td>
            <td class="imgs"><img src="images/cycle.png" width="50px"></td>
        </tr>

        <tr>
            <th>Habit Type </th>
            <td> Shrub</td>
            <td class="imgs"><img src="images/habit.png" width="50px"></td>
        </tr>

        <tr>
            <th>Flower Color</th>
            <td>White</td>
            <td class="imgs"><img src="images/flower.png" width="60px"></td>
        </tr>

        <tr>
            <th>Aroma </th>
            <td> Not Scented</td>
            <td class="imgs"><img src="images/aroma.jpeg" width="50px"></td>
        </tr>

        <tr>
            <th>Growth Rate</th>
            <td> Moderate</td>
            <td class="imgs"><img src="images/growth.jpg" width="50px"></td>
        </tr>

        <tr>
            <th>Habitat	Central</th>
            <td> Asia, Vietnam, China, Japan</td>
            <td class="imgs"><img src="images/habitt2.png" width="50px"></td>
        </tr>
    </table>


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