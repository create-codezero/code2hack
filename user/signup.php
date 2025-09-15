<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign Up</title>
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
                         <h2 class="fs-30 mt-20 mb-20" style="color: white;">Sign Up</h2>

                         <p style="color: red;">
                              <?php
                              session_start();
                              require_once "../config/config.php";

                              if (isset($_SESSION['user_exist'])) {
                                   echo $_SESSION['user_exist'];
                              }
                              ?>
                         </p>

                         <label> UserName </label>
                         <br>
                         <div class="input tx-center d-flex justify-center">
                              <i class="fa fa-user-circle ml-10"></i>
                              <input type="text" name="username" placeholder="Username" class="mr-10" required>
                         </div>

                         <br>

                         <label> Email </label>
                         <br>
                         <div class="input tx-center d-flex justify-center">
                              <i class="fa fa-user-circle ml-10" style="color: orange;"></i>
                              <input type="email" name="email" placeholder="E-mail" class="mr-10" required>
                         </div>

                         <br>

                         <label> Password </label>
                         <br>
                         <div class="input tx-center d-flex justify-center">
                              <i class="fa fa-key ml-10"></i>
                              <input type="password" name="password_1" placeholder="Password" minlength="8" lass="mr-10" required>
                         </div>

                         <br>

                         <label> re-Password </label>
                         <br>
                         <div class="input tx-center d-flex justify-center">
                              <i class="fa fa-key ml-10"></i>
                              <input type="password" name="password_2" placeholder="re-Password" minlength="8" class="mr-10" required>
                         </div>

                         <br>


                         <button class="btn btn-orange mb-20" name="reg_user"> Sign Up </button>

                         <p class="mb-20" style="color: #ffffff;">Have an Account, <a href="./" class="tx-light-blue">Sign In Now !</a></p>

                    </div>
               </form>
          </div>
     </div>

</body>

</html>