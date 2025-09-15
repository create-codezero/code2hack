<?php

session_start();

require_once "../../config/config.php";


if (!isset($_SESSION['username'])) {
     header('location:./user/');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../../admin/style/login.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Select A Type</title>
</head>

<body>

     <div class="login-container" style="background-color: #000055;">
          <div class="content">
               <div class="div-mini">
                    <div class="login-box">
                         <form action="./" method="post" enctype="multipart/form-data">
                              <div class="card">
                                   <div class="top-header mb-20">
                                        <h1>
                                             Select A type
                                        </h1>
                                   </div>
                                   <div class="card-main mb-20" style="text-align: center;">
                                        <div class="holder mb-10">
                                             <label for="username">Select A Type</label>
                                             <div class="input-radio">
                                                  <i class="fa fa-user" aria-hidden="true"></i>
                                                  <input type="radio" name="type" id="name" value="Android Development">
                                                  <label>Android Dev</label>
                                             </div>
                                             <div class="input-radio">
                                                  <i class="fa fa-user" aria-hidden="true"></i>
                                                  <input type="radio" name="type" id="name" value="Web Development">
                                                  <label>Website Dev</label>
                                             </div>
                                        </div>
                                   </div>
                                   <div style="text-align: center;">
                                        <button type="submit" class="btn btn-primary mb-20" name="submit">Submit</button>
                                   </div>
                                   <div></div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>

</body>

</html>