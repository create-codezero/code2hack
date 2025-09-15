<?php

session_start();

require_once "../../config/config.php";


if (!isset($_SESSION['username'])) {
     header('location:./user/');
}

if (isset($_POST['submit'])) {
     $type = $_POST['type'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../../admin/style/login.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Upload Your Work</title>
     <link rel="stylesheet" href="../../fontawesome/css/all.css">
</head>

<body>
     <div class="login-container" style="background-color:#000055;">

          <div class="content">
               <div class="div-mini">
                    <div class="login-box">
                         <form method="post" enctype="multipart/form-data" action="./upload.php">
                              <div class="card">
                                   <div class="top-header mb-20">
                                        <h1>Upload Assets</h1>
                                   </div>
                                   <div class="card-main mb-20">
                                        <div class="holder mb-10">
                                             <label for="username">Name</label>
                                             <div class="input">
                                                  <i class="fa fa-user" aria-hidden="true"></i>
                                                  <input type="text" name="name_project" id="name" placeholder="Name">
                                             </div>
                                        </div>
                                        <div class="holder mb-10">
                                             <label for="username">Description</label>
                                             <div class="input">
                                                  <i class="fas fa-briefcase"></i>
                                                  <input type="text" name="description_project" id="description" placeholder="Description">
                                             </div>
                                        </div>
                                        <div class="holder mb-10">
                                             <label for="username">Publiser</label>
                                             <div class="input">
                                                  <i class="fa fa-user" aria-hidden="true"></i>
                                                  <input type="text" name="owner_project" id="Publiser" placeholder="Publiser">
                                             </div>
                                        </div>
                                        <div class="holder mb-10">
                                             <label for="username">Assests</label>
                                             <div class="input">
                                                  <i class="fas fa-file"></i>
                                                  <input type="file" name="file" id="assests" placeholder="Assests">
                                             </div>
                                        </div>
                                        <div class="holder mb-10">
                                             <label for="username">Thumbnail</label>
                                             <div class="input">
                                                  <i class="fas fa-file"></i>
                                                  <input type="file" name="thumbnail" id="thumbnail" placeholder="Thumbnail">
                                             </div>
                                        </div>
                                        <div class="holder">
                                             <label>Don't Change This</label>
                                             <div class="input">

                                                  <i class="fas fa-stop" style="color: red;"></i>
                                                  <input value="<?php echo $type; ?>" name="type">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card-btn mb-20">
                                        <button class="btn btn-primary mb-20" name="upload" type="submit">Upload</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>

     </div>



</body>

</html>