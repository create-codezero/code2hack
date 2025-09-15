<?php

session_start();

require_once "./config/config.php";


if (!isset($_SESSION['username'] , $_SESSION['id'])) {
     header('location:./user/');
}

$ID = $_SESSION['id'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Code2hack -- World of Programmers</title>
     <link rel="icon" href="./image/logo_r.png">
     <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="./fontawesome/css/all.css">
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
                         <li><a href="" class="tx-light-blue">Home</a></li>
                         <li><a href="#features">Features</a></li>
                         <li><a href="#About_Us">About Us</a></li>
                         <li><a href="#Contact_Us">Contact Us</a></li>
                         <li><a href="./user/upload/select_type.php">Upload</a></li>
                         <div>
                              <li><a href="./user/signout.php" class="btn-red">Sign Out</a></li>
                         </div>
                    </ul>
               </nav>

               <div class="clear-fix"></div>
          </div>
     </div>
     <!-- navbar end -->
     <div class="container full-h justify-center bg-banner tx-center d-flex">
          <div>
               <h1 class="fs-50">Are You A <span class="tim-tim">Developer</span> <span class="tx-light-blue"> !</span>
               </h1>
               <p class="fs-20">Great<span class="tim-tim"> <?php echo $_SESSION['username'];?></span>, You Are In Right Place, Go And Explore Now<span class="tx-light-blue"> !</span>
               </p>

               <button class="btn btn-light-blue"><a href="#features">Explore Now</a></button>
               <button class="btn btn-green ml-20"><a href="#About_Us">About Us</a></button>
          </div>
     </div>

     <!--- This IS the subscribe section -->

     <div class="container d-flex justify-center" style="height: 200px; background-color:white; color:black;">

          <div class="container d-flex justify-center" style="padding: 20px">

               <p class="f-left mt-20">JOIN US ON YOUTUBE ! SUBSCRIBE NOW</p>
               <button class="btn f-right ml-20" style="border-radius: 1px !important; background-color:red; color:white;"><a href="https://www.youtube.com/channel/UCLja9XkH6tEa6gzRP2wf2lg?sub_confirmation=1">Subscribe</a></button>

          </div>

     </div>

     <!-- Feature section starts from here -->
     <div id="features">
          <div class="tx-center">
               <h1 class="tx-dark-blue fs-40 mt-20 mb-20">Features</h1>
          </div>
          <div class="container fit-h justify-center d-flex">

               <div class="card-container tx-center mb-20 justify-center">
                    <div class="card">
                         <h1 class="mt-20">Android Dev</h1>
                         <p class="fs-18 mt-20">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam,
                              excepturi
                              facere
                              fugit earum, enim consectetur mollitia, quibusdam eligendi expedita amet similique!
                              Maiores
                              modi itaque minima amet ad voluptatem, autem aut.</p>
                         <button class="btn btn-light-blue mt-20 mb-20"><a href="./features/?type=Android Development">Go For This</a></button>
                    </div>
                    <div class="card">
                         <h1 class="mt-20"> Web Dev </h1>
                         <p class="fs-18 mt-20">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam,
                              excepturi
                              facere
                              fugit earum, enim consectetur mollitia, quibusdam eligendi expedita amet similique!
                              Maiores
                              modi itaque minima amet ad voluptatem, autem aut.</p>
                         <button class="btn btn-light-blue mt-20 mb-20"><a href="./features/?type=Web Development">Go For This</a></button>
                    </div>
                    <div class="card">
                         <h1 class="mt-20">Source Code</h1>
                         <p class="fs-18 mt-20">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam,
                              excepturi
                              facere
                              fugit earum, enim consectetur mollitia, quibusdam eligendi expedita amet similique!
                              Maiores
                              modi itaque minima amet ad voluptatem, autem aut.</p>
                         <button class="btn btn-light-blue mt-20 mb-20"><a href="./code/?filename=pro_2.txt">Go For This</a></button>
                    </div>
                    <div class="card">
                         <h1 class="mt-20"> Blogs </h1>
                         <p class="fs-18 mt-20">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam,
                              excepturi
                              facere
                              fugit earum, enim consectetur mollitia, quibusdam eligendi expedita amet similique!
                              Maiores
                              modi itaque minima amet ad voluptatem, autem aut.</p>
                         <button class="btn btn-light-blue mt-20 mb-20"><a href="#">Read Blog</a></button>
                    </div>
               </div>
          </div>
     </div>
     <div class="bg-dark-blue justify-center" id="About_Us">
          <div class="tx-center mb-20 mt-20">
               <h1 class="mt-20 fs-40 mt-20">About Us</h1>
          </div>

          <div class="container d-flex mob-d-c">
               <div class="ml-20 w-50-l ml-40 d-flex justify-center mob-100">
                    <img src="./image/logo_r.png" class="img-fluid mb-20">
               </div>

               <div class="w-50-r ml-20 mb-20 d-flex justify-center mob-100">
                    <div>
                         <h1 class="mb-20">Our Mission</h1>
                         <p class="mb-20 fs-20 mr-40" style="color: white;">Hello , Visitor Our Mission is to Make your Coding/Programming Life Easy , Beautiful And Better
                              . So
                              That's why We providing you many Free , Beautiful And Best Assests , Designs , Source Code , Etc
                              For
                              Web Development And Android Development.</p>
                         <ul class="">
                              <li class="fs-20"> <i class="fa fa-check" style="color: orange;"></i> All Content Is Totally Free</li>
                              <li class="fs-20"> <i class="fa fa-check" style="color: orange;"></i> Source Code Available</li>
                              <li class="fs-20"> <i class="fa fa-check" style="color: orange;"></i> Providing Assests Also</li>
                         </ul>
                         <button class="btn btn-orange mb-20"><a href="#Contact_Us">Contact Us</a></button>
                    </div>
               </div>

               <div class="clear-fix bg-dark-blue"></div>
          </div>
     </div>
     <!-- Contact Us -->
     <div id="Contact_Us">
          <div class="tx-center">
               <h1 class="fs-50 tx-dark-blue mt-20 mb-20">Contact Us</h1>
          </div>
          <div class="d-flex justify-center">

               <div class="form-box">
                    <form action="./php/contactus.php" method="post" class="bg-dark-blue tx-center mb-20 d-flex justify-center">
                         <div class="form-group">
                              <h2 class="fs-20 mt-20 mb-20" style="color: white;">Contact Us Form</h2>

                              <label> First Name </label>
                              <br>
                              <div class="input tx-center d-flex justify-center">
                                   <i class="fa fa-user-circle ml-10"></i>
                                   <input type="text" name="fname" placeholder="First Name" class="mr-10">
                              </div>

                              <br>

                              <label> Last Name </label>
                              <br>
                              <div class="input tx-center d-flex justify-center">
                                   <i class="fa fa-user-circle ml-10" style="color: orange;"></i>
                                   <input type="text" name="lname" placeholder="Last Name" class="mr-10">
                              </div>

                              <br>

                              <label> Email </label>
                              <br>
                              <div class="input tx-center d-flex justify-center">
                                   <i class="fa fa-mail-bulk ml-10"></i>
                                   <input type=" text" name="email" placeholder="Email" class="mr-10">
                              </div>

                              <br>

                              <label> Subject </label>
                              <br>
                              <div class="input tx-center d-flex justify-center">
                                   <i class="fa fa-suitcase ml-10"></i>
                                   <input type="text" name="subject" placeholder="Subject" class="mr-10">
                              </div>

                              <br>

                              <label> Message </label>
                              <br>
                              <div class="textarea tx-center d-flex justify-center">
                                   <i class="fa fa-surprise ml-10"></i>
                                   <textarea type="text" name="message" placeholder="Type Your Message Here ..." class="mr-10" rows="5"></textarea>
                              </div>


                              <button class="btn btn-orange mb-20"> Submit </button>

                         </div>
                    </form>
               </div>

          </div>
     </div>
     <div id="features" class="bg-dark-blue">
          <div class=" tx-center">
               <h1 class="fs-40 mt-20">Our Team</h1>
               <p class="tx-light-blue mb-20" style="color: #fff;">This is Our Small Team Which is Working To make Your Coding Life Easy , Beautiful And Better..</p>
          </div>
          <div class="container fit-h justify-center d-flex">

               <div class="card-container tx-center mb-20 justify-center">
                    <div class="card-Team">
                         <img src="./image/logo.png" class="img-fluid">
                         <h4 class="fs-30 mt-10 tx-dark-blue">Yas Tiwari</h4>
                         <p class="fs-18 tx-green"> Founder </p>
                         <p class="fs-18 mb-10">My Self Yas Tiwari . I am a Student And I want to Help Those People who are Interested In
                              Programming.</p>
                    </div>
               </div>
          </div>
     </div>

     <div class=" tx-center">
          <h1 class="fs-20 mb-20 mt-20 tx-dark-blue">&copy; All Right is Reserved by Code2hack</h1>
     </div>
</body>

</html>