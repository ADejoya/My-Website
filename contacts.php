<?php
    session_start();
    if(!isset($_SESSION["users"])){
        header("Location: homepage.php");
        }
    $username = $_SESSION["user_id"];   
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AD</title>
    <link rel="stylesheet" href="contacts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
</head>
<body>
<ul>
    <li><a class="active" href="#home" onclick="navigateTo('index.php')">Home</a></li>
</ul>

<div class="container2">
    <div class="row">
        <div class="col">
            <h1 class="name"><br><br>ANTON DE JOYA</h1>
            <p>BSIT NU-FAIRVIEW</p>
        </div>
        <div class="contact-text">
            <h1>CONTACT ME HERE</h1>
        </div>
        <div class="col">
           <div class="card" >
            <a href="https://www.facebook.com/anton.dejoya03/" target="_blank">Facebook</a>
           </div>
           <div class="card">
            <a href="https://www.instagram.com/antondejoya/" target="_blank">Instagram</a>
           </div>
           <div class="card">
            <a href="https://www.linkedin.com/in/antonio-de-joya-787881249/" target="_blank">Linkedin </a>
           </div>
         </div>
     </div>
 </div>

 <script>
    function navigateTo(page) {
        window.location.href = page;
    }
</script>


</body>
</html>