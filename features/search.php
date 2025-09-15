<?php

session_start();

require_once "../config/config.php";


if (!isset($_SESSION['username'])) {
     header('location:../login/');
}


$type = $_GET['type'];
$search = $_POST['search'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $type ?></title>
     <link rel="icon" href="../image/logo_r.png">
     <link rel="stylesheet" href="../css/style.css">
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
                         <li><a href="../user/upload/select_type.php">Upload</a></li>
                         <div>
                              <li><a href="../user/signout.php" class="btn-red">Sign Out</a></li>
                         </div>
                    </ul>
               </nav>

               <div class="clear-fix"></div>
          </div>
     </div>
     <!-- navbar end -->
     <div id="features" class="bg-dark-blue">
          <div class="tx-center justify-center d-flex">
               <div class="form-box">
                    <form action="./search.php?type=<?php echo $type; ?>" method="post" class="bg-dark-blue tx-center mb-20 d-flex justify-center">

                         <div class="form-group mt-20">
                              <div class="input tx-center d-flex justify-center ">
                                   <i class="fa fa-search ml-20" style="color: orange"></i>
                                   <input type="text" placeholder="Enter For Search .." class="fs-30" name="search" required>
                              </div>

                         </div>

                         <button class="btn btn-green ml-20">Search</button>


                    </form>
               </div>
          </div>
          <div class="tx-center">
               <h1 class="fs-40"><?php echo $type ?> Tools</h1>
               <p class="tx-light-blue mb-20" style="color: #fff;">This is Our Work Which makes Your Coding Life Easy , Beautiful And Better...</p>
          </div>
          <div class="container fit-h justify-center d-flex">

               <div class="card-container tx-center mb-20 justify-center">
                    <?php

                    //selecting all development assests
                    $sql = "SELECT * FROM `assests` WHERE `type` = '$type' AND `name` LIKE '%$search%' OR `description` LIKE '%$search%'  ORDER BY id DESC";

                    //firing query
                    $result = mysqli_query($link, $sql);


                    if (mysqli_num_rows($result) > 0) {
                         while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                              <div class="card-Team">
                                   <img src="<?php echo $row['thumbnail']; ?>" class="img-fluid">
                                   <h4 class="fs-20 mt-10 tx-dark-blue"><?php echo $row['name']; ?></h4>
                                   <p class="fs-18 tx-green"> <?php echo $row['owner']; ?> </p>
                                   <p class="fs-18"><?php echo $row['description']; ?></p>
                                   <button class="btn btn-green mb-10"><a href="<?php echo $row['file']; ?>" download>Download</a></button>
                              </div>
                         <?php
                         }
                    } else {
                         ?>
                         <p class="tx-light-blue mb-20" style="color:red;"><?php echo "There is No Assests Found"; ?> <span class="fs-30">:)</span></p>
                    <?php
                    }

                    ?>
               </div>
          </div>
     </div>

     <div class=" tx-center">
          <h1 class="fs-20 mb-20 mt-20 tx-dark-blue">&copy; All Right is Reserved by Code2hack</h1>
     </div>
</body>

</html>