<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>pop up</title>
     <link rel="icon" href="../image/logo_r.png">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../fontawesome/css/all.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <style>
          .pop-down.active {
               display: flex !Important;
          }
     </style>
</head>

<body>
     <button onclick="download()" class="btn btn-green"> Download </button>
     <div class="pop-down" style="position: absolute; display:none;">

          <div class="container d-flex justify-center">

               <div class="box tx-center mt-20 mb-20 bg-dark-blue" style="max-width: 80%; width:750px; border-radius:10px;">
                    <h2 class="mt-20 mb-20">Download This Now!</h2>
                    <img src="" alt="THEME IMAGE" id="pop-img">
                    <h4 class="fs-20 mt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maxime </h4>
                    <p class="fs-18 tx-green"> Lorem ipsum </p>
                    <p class="fs-18 " style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, maxime </p>
                    <button class="btn btn-green mb-10 mr-20"><a href="<?php echo $row['file']; ?>" download>Download</a></button>
                    <button class="btn btn-red mb-10"><a href="<?php echo $row['file']; ?>" download>Canel</a></button>
               </div>

          </div>
     </div>

     <script>
          function download() {
               alert("download clicked");
               $(".pop-down").toggleClass("active");
          }
     </script>