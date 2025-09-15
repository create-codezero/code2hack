<?php

session_start();

require_once "../config/config.php";


if (!isset($_SESSION['adminname'])) {
     header('location:./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="stylesheet" href="./style/main.css">
     <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>
     <div class="side-menu">
          <div class="main-div">
               <h1>Controls</h1>

               <ul>
                    <li><a class="active" href="#" onclick="openit()">Home</a></li>
                    <?php

                    //selecting all development assests
                    $sql = "SELECT * FROM `admin-menu`";

                    //firing query
                    $result = mysqli_query($link, $sql);


                    if (mysqli_num_rows($result) > 0) {
                         while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                              <li><a onclick="openit()"><?php echo $row['name']; ?> </a> </li>
                    <?php
                         }
                    } else {
                         echo "You have No Controls";
                    }

                    ?> <li><a href="../user/signout.php" style="color: red;">Sign out</a></li>
               </ul>
          </div>
     </div>
     <script>
          function openit() {
               <?php
               $url = $_GET['link'];
               ?>
               $("#load-here").load('<?php echo $url; ?>');
          }
     </script>
     <div class="container" id="load-here">
     </div>
</body>

</html>