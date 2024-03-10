
<?php
    session_start();
    if(!isset($_SESSION["users"])){
        header("Location: login.php");
        }
    $username = $_SESSION["user_id"];   
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD</title>
    <link rel="stylesheet" href="aboutme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<ul>
    <li><a class="active" href="#home" onclick="navigateTo('index.php')">Home</a></li>
</ul>
<header>
    <div class="header-content">
        <h2>ABOUT ME</h2>
        <div class="line"></div>
        <h1>I'm Anton De Joya</h1>
        <div class="line"></div>
    </div>
</header>

<! –– MY PICS ––> 
<section class="Favorite places">
    <div class="title">
        <h1>MY PICTURES</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="mine2.png" alt="">
            <img src="mine4.png" alt="">
        </div>
        <div class="col">
            <img src="mine5.png" alt="">
            <img src="mine3.png" alt="">
        </div>
    </div>
</section>

<! –– places ––> 
<section class="Favorite places">
    <div class="title">
        <h1>I love going to the beach</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="beach1.png" alt="">
            <h4>BORACAY</h4>
            <p>Beach for me is where I find peace it is where<br> I relax and meditate. I love the sound of the waves</p>
            <p><br></p>
            <img src="beach5.png" alt="">
        </div>
        <div class="col">
            <img src="beach4.png" alt="">
            <img src="beach3.png" alt="">
        </div>
    </div>
</section>

<! –– friends and family ––> 
<section class="Favorite places">
    <div class="title">
        <h1>Spending time with my friends and family</h1>
        <div class="line"></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="travel1.png" alt="">
            <img src="travel5.png" alt="">
            <h4>Friends and Family</h4>
            <dl>In my free time I make sure that I make memories</dl>
            <p><br></p>
            <img src="family1.png" alt="">
            <img src="family3.png" alt="">
        </div>
        <div class="col">
            <img src="travel4.png" alt="">
            <img src="travel3.png" alt="">
            <img src="travel2.png" alt="">
        </div>
    </div>
</section>

<script>
    function navigateTo(page) {
        window.location.href = page;
    }
</script>

</body>
</html>