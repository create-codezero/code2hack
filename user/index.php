<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign In</title>
     <link rel="icon" href="../image/logo_r.png">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../fontawesome/css/all.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
     <div class="d-flex justify-center full-h">

          <div class="form-box">
               <form action="./server.php" method="post" class="bg-dark-blue tx-center mb-20 d-flex justify-center">
                    <div class="form-group">
                         <h2 class="fs-30 mt-20 mb-20" style="color: white;">Sign In</h2>

                         <p style="color: red;">
                              <?php
                              session_start();
                              require_once "../config/config.php";
                              if (isset($_SESSION['wrong'])) {
                                   echo $_SESSION['wrong'];
                              }
                              ?>
                         </p>

                         <label> Username </label>
                         <br>
                         <div class="input tx-center d-flex justify-center">
                              <i class="fa fa-user-circle ml-10"></i>
                              <input type="text" name="username" placeholder="First Name" class="mr-10" required>
                         </div>

                         <br>

                         <label> Password </label>
                         <br>
                         <div class="input tx-center d-flex justify-center">
                              <i class="fa fa-key ml-10" style="color: orange;"></i>
                              <input type="password" name="password" placeholder="Password" class="mr-10" required>
                         </div>

                         <br>

                         <button class="btn btn-green mb-20" name="login_user"> Sign In </button>

                         <p class="mb-20" style="color: #ffffff;">Don't have Account, <a href="./signup.php" class="tx-light-blue">Create Now !</a></p>

                    </div>
               </form>
          </div>

     </div>
</body>

</html>