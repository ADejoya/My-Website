<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD</title>
    <link rel="stylesheet" href="homepage.css">
    <style>
        #login-modal-container {
            display: none; /* Hide the modal by default */
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal {
            background: #e6ecf0;
            padding: 20px;
            border-radius: 10px;
            max-width: 90%; /* Adjusted maximum width for smaller screens */
            width: 450px;
            box-sizing: border-box; /* Ensures padding is included in the width */
        }

        .top-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-btn {
            text-align: center;
        }

        /* Log in button */
        .btn-primary {
            display: inline-block;
            color: rgb(0, 0, 0);
            background: rgb(44, 148, 233);
            border: 1px solid transparent;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 30px;
            text-transform: uppercase;
            transition: all .55s ease;
        }

        .btn-primary:hover {
            background: rgb(20, 108, 148);
            border-color: rgb(175, 211, 226);
        }

        /* Hover effect for login and signup buttons */
        .btn-warning:hover {
            background-color: rgb(175, 211, 226);
            border-color: rgb(175, 211, 226);
        }

        /* Adjusted margin for the top heading */
        .col h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div id="login-modal-container">
    <div id="login-modal" class="modal">
    <div class="close-modal" onclick="closeLoginModal()">X</div>
        <div class="top-form">
            <h1>WELCOME TO AD WEBSITE</h1>
            <p>Login or register to proceed<br><br></p>

            <form action="login.php" method="post">
                <div class="form-group"> 
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required> 
                </div>

                <div class="form-group"> 
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" required> 
                </div>

                <div class="form-btn">
                    <input type="submit" value="Login" name="login" class="btn btn-primary">
                </div>
            </form>

            <div>
                <p>Not Registered yet? <a href="registration.php">Register Here</a></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="logo">
                <img src="ADLogo.png" alt="Logo" width="250" height="auto">
            </div>
            <h2>Hello it's me</h2>
            <h1>Anton De Joya</h1>
            <p>This is my official portfolio website to show all my details login or sign up to access</p>
            <a href="#" class="btn btn-warning" onclick="openLoginModal()">Login</a>
            <a href="registration.php" class="btn btn-warning">Signup</a>
        </div>
        <div class="col">
            <div class="card card1" onclick="openLoginModal()">
                <h5>About me</h5>
              
            </div>
            <div class="card card1" onclick="openLoginModal()">
                <h5>Resume</h5>
                
            </div>
            <div class="card card1" onclick="openLoginModal()">
                <h5>Education</h5>
                
            </div>
            <div class="card card1" onclick="openLoginModal()">
                <h5>Contact information</h5>
                
            </div>
        </div>
    </div>
</div>

<script>
    // Function to open the login modal
    function openLoginModal() {
        var modalContainer = document.getElementById("login-modal-container");
        modalContainer.style.display = "flex";
    }

    // Function to close the login modal
    function closeLoginModal() {
        var modalContainer = document.getElementById("login-modal-container");
        modalContainer.style.display = "none";
    }

    // Close the modal when the user clicks outside of it
    window.onclick = function(event) {
        var modalContainer = document.getElementById("login-modal-container");
        if (event.target == modalContainer) {
            modalContainer.style.display = "none";
        }
    }
</script>

</body>
</html>