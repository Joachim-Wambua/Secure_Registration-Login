<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font awesome cdn  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }

        .jumbotron {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../images/books.jpg");
            background-size: cover;
            height: 500px;
            width: 100%;
            padding: 100px;
        }

    </style>
</head>
<body>


<!-- Navigation menu -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-size:36px;">
    <!-- <img src="g" width="50" height="50" class="d-inline-block align-top" alt=""> -->
    The Online Library
  </a>

  <form class="form-inline my-2 my-lg-0">
      <img src="images/user.png" style="width:50px; height: 50px; margin-right:10px" alt="user-avtar">
  <a href="logout.php" class="btn btn-primary "><i class="fa fa-lock-open"></i> Logout</a> 
  <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    </form>
</nav>
    <p>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-white">
            <!-- <a href="#" target="_blank"><img class="card-img-top" src="images/welcome-to-coding-cush.gif" alt="Card image cap" style="width:750px; height:400px;"></a> -->
            <div class="page-header">
                <h1>Hi There, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to our online Library.</h1>
            </div>
            <hr>
        </div>
    </div>  
    </p>

    <div class="text-center p-2"><h3>Available Books</h3></div>

        <!-- Book Cards -->
        <div class="container column" >
            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>

            <div class="card mb-1 p-2 mx-auto">
                <img class="card-img-top w-25 mx-auto" src="images/alchemist.png" alt="Card image cap">
                <div class="card-body text-center">
                <h5 class="card-title">The Alchemist</h5>
                    <p class="card-text">This is supporting text giving a brief description of the book.</p>
                    <a href="#" class="btn btn-primary">Record</a>
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-primary">Lend</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>

	
	
	
	
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>