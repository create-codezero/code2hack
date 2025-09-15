<?php

session_start();

require_once "../config/config.php";


if (!isset($_SESSION['username'])) {
     header('location:./user/');
}

$file_name = $_GET['filename'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Source Code</title>
     <link rel="icon" href="../image/logo_r.png">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="./style.css">
     <link rel="stylesheet" href="../fontawesome/css/all.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script>
          function openmenu() {

               $("nav").toggleClass("active");

               $(".toggle").toggleClass("active");

          }
     </script>
</head>

<body>
     <div class="navbar-container">
          <div class="navbar">
               <p class="logo-tx f-left">Code2hack<span class="tx-light-blue"> .</span></p>

               <div class="f-right toggle" onclick="openmenu()"></div>


               <nav class="f-right">
                    <ul>
                         <li><a href="../">Home</a></li>
                         <li><a href="#features" class="tx-light-blue">Features</a></li>
                         <li><a href="../#About_Us">About Us</a></li>
                         <li><a href="../#Contact_Us">Contact Us</a></li>
                         <div>
                              <li><a href="./user/signout.php" class="btn-red">Sign Out</a></li>
                         </div>
                    </ul>
               </nav>

               <div class="clear-fix"></div>
          </div>
     </div>
     <!-- navbar end -->

     <div class="container d-flex justify-center bg-dark-blue">
          <div class="container">
               <div class="pre-div">
                    <div class="pre-header">
                         <div class="red-circle"></div>
                         <div class="yellow-circle"></div>
                         <div class="green-circle"></div>
                    </div>
                    <div class="scroll">
                         <pre class="load display-code"></pre>
                    </div>
               </div>
          </div>
     </div>

     <!-- Footer  -->
     <div class=" tx-center">
          <h1 class="fs-20 mb-20 mt-20 tx-dark-blue">&copy; All Right is Reserved by Code2hack</h1>
     </div>

     <!-- Script is running from here -->

     <script>
          $(".load").load('../codefiles/<?php echo $file_name; ?>');
     </script>

</body>

</html>