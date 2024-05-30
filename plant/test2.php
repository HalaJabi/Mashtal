<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "final");
if(isset($_POST["add"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'			=>	$_GET["id"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="test2.php"</script>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
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

<header>

    <div class="header-1">
        <div class="share">
            <span> follow us : </span>
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
        <div class="call">
            <span> call us : </span>
            <a href="#">+123-456-7890</a>
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
<section class="home" id="home">
    <br />
    <div class="container">
        <br />
        <br />
        <br />

        <div style="clear:both"></div>
        <br />
        <h3 style="font-size: 30px; text-align: center; color: red;" >Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <?php
                if(!empty($_SESSION["shopping_cart"]))
                {
                    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
                        ?>
                        <tr>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_quantity"]; ?></td>
                            <td>$ <?php echo $values["item_price"]; ?></td>
                            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                            <td><a href="test2.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                        </tr>
                        <?php
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>

    </div>
    <br />
</section>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>A website that helps you enjoy with a nice plant and can you take a Gift for all event. We are glad you are using our website</p>        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">category</a>
            <a href="#">product</a>
            <a href="#">deal</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linked</a>
        </div>
    </div>
    <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>
</section>
<style>
    table
    {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 15px;
        border-radius: 20px;
        text-align: center;
        border: 2px solid black;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    th{
        font-size: 20px;
        padding: 10px;
        width: 5%;
        color: darkgreen;
        font-weight: bold;

    }
    td:hover
    {
        background-color: yellow;
    }
    td {

        padding: 10px;
        width: 5%;
        font-weight: bold;

    }
</style>
</body>
</html>
