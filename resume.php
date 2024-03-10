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
    <title>AD</title>
    <link rel="stylesheet" href="resume.css"> <!-- Link to your external CSS file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-default">
        <ul>
            <li><a class="active" href="#home" onclick="navigateTo('index.php')">Home</a></li>
        </ul>
    </nav>

    <div class="ExternalFiles">
        <iframe src="DE JOYA RESUME 2023.pdf" width="1000" height="1000"></iframe>
    </div>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>