<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive plant selling website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <style>

        body{
            background: black;
        }
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        .header-4{
            position:fixed;
            top: 0;
            left:0;
            width:100%;
            padding: 20px 8.5%;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .navbar a{
            position: relative;
            font-size: 14px;
            color: black;
            text-decoration: none;
            font-weight: 500;
            margin-right: 60px;
            text-align: center;
        }

        .header-4 .navbar a:hover{
            background-color:transparent;
            font-weight: bold;
            font-size: 16px;
            color: darkgreen;
            text-decoration: underline darkgreen;
        }

        .header-4 .navbar ul li:hover ul.dropdown {
            display: block;
            background-color:white;
        }


        header-4 .navbar ul li ul.dropdown {
            width: 120%;
            position: absolute;
            z-index: 999;
            display: none;
            text-align: center;
        }


        .navbar a::after{
            content: ' ';
            position:absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 2px;
            background: #3A9943;
            border-radius: 5px;
            transform: translateY(10px);
            transition: 0.5s;
            opacity: 0;
        }
        .navbar a:hover::after{
            transform: translateY(0);
            background-color: white;
            opacity: 1;
        }
        .header-4 .icons a {
            color: darkgreen;
            font-size: 23px;
            margin-left: 1rem;
        }
        .header-4 .icons a:hover
        {
            color: darkgreen;
            font-size: 21px;
        }

        .container
        {
            position: absolute;
            top:70%;
            left:50%;
            transform: translate(-50%,-75%);
            width:1200px;
            height:610px;
            background: url('../../webpro/plant website/images/edc040121edletter-grattan-001-1615411407.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-top: 20px;
        }
        .container .content
        {
            position: absolute;
            padding:80px;
            color:black;
            top:0;
            left:0;
            width:80%;
            height: 100%;
            background-color: transparent;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
        }

        .container .lorggeg-box
        {
            position: absolute;
            right: 0;
            top:0;
            width:40%;
            height: 110%;
            overflow: hidden;
        }

        .lorggeg-box .form-box
        {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background: transparent;
            backdrop-filter: blur(5px);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .lorggeg-box .form-box.login
        {
            transform: translateX(900px);
            transition: transform .3s ease;
            transition-delay: 0s;
        }
        .lorggeg-box.act .form-box.login
        {
            transform: translateX(450px);
            transition-delay: 0s;
        }
        .lorggeg-box.act .form-box.register
        {
            transform: translateX(900px);
            transition-delay: 0s;
        }
        .lorggeg-box .form-box.register
        {
            transform: translateX(450px);
            transition: transform .3s ease;
            transition-delay: 0s;
        }
        .form-box h2
        {
            font-size: 32px;
            text-align: center;
            padding-left: 35px;

        }
        .input-box
        {
            position: relative;
            margin: 15px 0;
            align-items: center;
        }

        .input-box input
        {
            width: 120%;
            height: 50px;
            background: transparent;
            border: 1px solid darkgreen;
            outline: none;
            border-radius: 40px;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
        }

        .header-3
        {
            background: transparent;
        }


        .input-box label{
            position: absolute;
            top:50%;
            left:20px;
            transform: translateY(-50%);
            font-size: 12px;
            font-weight: bold;
            color: black;
            pointer-events: none;
            transition: 0.5s ease;
        }
        .input-box input:focus~label,
        .input-box input:valid~label
        {
            top:1px;
            font-size:15px;
            color: darkgreen;
        }

        .remember-forgot{
            margin: 20px 0 10px;
            text-align: center;
            font-weight: bold;
            padding-left: 40px;
            font-size: 15px;
        }
        .remember-forgot a{
            font-size: 0.85em;
            text-decoration: none;
            color: black;
        }
        .remember-forgot a:hover{
            text-decoration: underline;
        }

        .btn
        {
            width: 120%;
            height: 50px;
            font-size: 20px;
            background: darkgreen;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            color:white;
            font-weight:bold ;

        }

        .login-register{
            margin: 20px 0 30px;
            text-align: center;
        }
        .login-register p{
            font-size: 15px;
            text-align:center;
            padding-left: 35px;
            font-weight: bold;
        }

        .login-register a{
            font-size: 15px;
            color:darkgreen;
            text-decoration: none;
            font-weight: bold;;

        }

        .login-register a:hover{
            text-decoration: underline;
        }
        .content .logo
        {
            font-size: 40px;
            font-family: 'Roboto Mono', monospace;
        }
        .content .logo:hover
        {
            font-size: 42px;
            color:darkgreen;
        }

        .text-sci h2{
            font-size:40px;
            line-height: 1;
        }
        .text-sci h2 span{
            font-size:25px;
        }

        .text-sci p{
            font-size: 16px;
            margin: 20px 0;
        }
        .social-icons a
        {
            font-size: 22px;
            color: white;
            margin-right: 10px;

        }
        .social-icons a:hover
        {
            transform: scale(1.2);
        }

        .backgroud {
            width: 100%;
            height: 100vh;
            background: url('../../webpro/plant website/images/edc040121edletter-grattan-001-1615411407.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(5px);
        }
        .gender
        {
            position: relative;
            display: flex;
            font-size: 15px;
        }
        .gender input
        {
            position: relative;
            display: flex;
            margin: 0 8px 25px 18px;
            gap:5px;
        }
        input[type="radio"]:checked + label
        {
            font-weight: bold;
            font-size:17px ;
        }


    </style>
</head>
<body>

<!-- header section starts  -->

<header>
    <div class="header-4">

        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><b><a href="index.php" ><img src="images/house.png" style="width:25px;height:25px;"> Home</a></b></li>

                <li><b> <a href="index.php"><img src="images/search.png" style="width:25px;height:25px;"> category</a></b></li>

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
            <a href="reg_sign.html" class="fas fa-user-circle"></a>
        </div>
    </div>

</header>
<div class="backgroud"></div>
<!-- header section ends -->
<div class="container">
    <div class="content">
        <h1 class="logo"> <img height="28px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAWdJREFUSEvFlo1NAzEMhV8nASYBNqGT0E4CnQQ2gU2oXpUXpb3E9iUpF6k6VfH5889zcjtstHYbcfGf4MeU5C+f9wQTxN8LgOf0PAI4rAXTyVvhpKdLq8CM+CNF3wMr3wmDv1KJRoF6PwSeDSXcBVMA77PSLPzsAXxa4vpzoByJE4CH1AqNiherCaZyKabbJRgjpk1PRZ4ANOe41lvCGC0Vzv3elc+N2gHyczM6rwC+0+D3ZKkgFfzlfw1c9lfQGQrP/fXAMpyl8NzfFlg9ZLajPVWZ2Sr6y6tWaoI56DSmuqng0aWWmWDO5EXyALx5jgS0yNY6QLjXmucITDZMgFoh/GpZ9/GMMi9KLLoFHilzM1MPPFLmfANZPWllXM6uxso6tXSOs5eLftYCaIHL/spG31C6iaR+QkMwb465XwOvUbNr28pYF0V1Bl2vAQMPfHWjBPyFTSxx0UlYLGFiMrznB70Zy2bgM2uqSR/W9H3pAAAAAElFTkSuQmCC"/> MASHTAL</h1>
        <div class="text-sci">
            <h2> Welcome ! <br> <span> To Our New Website.</span></h2>
            <p> <b> "A beautiful plant is like having a friend around the house."</b></p>
            <div class="social-icons">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>


    <div class="lorggeg-box">
        <div class="form-box login">
            <form action="dbsignin.php" method="POST">
                <h2>Sign In</h2>

                <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <input type="password" name="pass"required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <a href="#"> Forget Password ? </a>
                </div>

                <button type="submit" class="btn"> Sign In</button>

                <div class="login-register">
                    <p>Don't have an account ?  <a href="#" class="register"> Sign Up </a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="dbsignup.php" method="POST" name="register-form">
                <h2>Sign Up</h2>

                <div class="input-box">
                    <input type="text" name="fname" required>
                    <label>First Name</label>
                    <p class="error fname-error"></p>
                </div>

                <div class="input-box">
                    <input type="text" name="lname" required>
                    <label>Last Name</label>
                    <p class="error lname-error"></p>
                </div>

                <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Email</label>
                    <p class="error email-error"></p>
                </div>

                <div class="input-box">
                    <input type="password" name="pass" required>
                    <label>Password</label>
                    <p class="error pass-error"></p>
                </div>

                <div class="input-box">
                    <input type="text"  name="Date" placeholder="Date of Birth" onfocus="(this.type='Date')" required autofocus>
                    <label>Birth Date</label>
                </div>
                <div class="gender">
                    <input type="radio" name="gender" checked><label for="male"> Male </label>
                    <input type="radio" name="gender"><label for="female"> Female </label>
                </div>

                <div class="remember-forgot">
                    <input type="checkbox" required>
                    <a href="#"> I agree to the terms & conditions </a>
                </div>

                <button type="submit" name="submit" class="btn"> Sign Up</button>

                <div class="login-register">
                    <p>Already have an account ? <a href="#" class="login-link"> Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- scroll top button  -->
<a href="#home" class="scroll-top fas fa-angle-up"></a>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js">

</script>




</body>
</html>