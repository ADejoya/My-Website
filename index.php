<?php
    // Move session_start() to the very top of the file
    session_start();

    // Check if user is not logged in, redirect to homepage
    if(!isset($_SESSION["users"])){
        header("Location: homepage.php");
        exit; // Add exit to stop further execution
    }

    // Get username from session
    $username = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : "";

    // Check if the comment is posted
    if(isset($_POST["comment"])){
        $message = $_POST["comment"];
        $date = date("Y-m-d");

        // Get the user's ID from the session
        if(isset($_SESSION["user_id"])) {
            $user_id = $_SESSION["user_id"];
        } else {
            // Handle the case where user ID is not set in session
            die("User ID not found in session");
        }

        require_once("database.php");

        $sql = "INSERT INTO comment (id, date, comment) VALUES (?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);

        $preparestmt = mysqli_stmt_prepare($stmt, $sql);

        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sss", $user_id, $date, $message);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success center'>Comment posted successfully!</div>";
        } else {
            die("Something went wrong");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        /* Add CSS styles here */
        .logo {
            margin-bottom: -70px; /* Adjust margin-bottom to reduce space between logo and "Hello it's me" */
            margin-top: -30px;
        }

        .intro-text {
            margin-top: -70px; /* Adjust margin-top to move closer to the logo */
        }
    </style>
</head>
<body>

<div class="container">
    

    <div class="row">
        <div class="col">
        <div class="logo">
            <img src="ADLogo.png" alt="Logo" width="200" height="auto">
        </div>
            <h2><br><br> Hello it's me</h2>
            <h1>Anton De Joya</h1>
            
            <p>BSIT NU-FAIRVIEW </p>
            <a href="logout.php" class="btn btn-warning">Logout</a>
        
        </div>
        <div class="col">
           <div class="card card1" onclick="navigateTo('aboutme.php')">
            <h5>About me</h5>
            <p> </p>
           </div>
           <div class="card card2" onclick="navigateTo('resume.php')">
            <h5>Resume</h5>
            <p> </p>
           </div>
           <div class="card card3" onclick="navigateTo('education.php')">
            <h5>Education</h5>
            <p> </p>
           </div>
           <div class="card card4" onclick="navigateTo('contacts.php')">
            <h5>Contact information</h5>
           
            <p> </p>       
        
            
        
        </div>

        <div class="commentBox">
        <div class="col-md-8">
            <h1 id="comments" class="text-center">Any reactions or questions? Comment here</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="comment" id="ucomment" class="form-label">Your Comment:</label>
                    <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn_submit">Submit</button>
            </form>
        </div>
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