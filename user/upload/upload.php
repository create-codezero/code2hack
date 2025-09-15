<?php
include '../../config/config.php';

if (!isset($_SESSION['username'])) {
     header('location:./user/');
}

if (isset($_POST['upload'])) {
     //this is for simple text upload

     $name = $_POST['name_project'];
     $description = $_POST['description_project'];
     $owner = $_POST['owner_project'];
     $type = $_POST['type'];


     //this is for the file upload

     $filename = $_FILES['file']['name'];
     $file_tempname = $_FILES['file']['tmp_name'];
     $file_folder = "../../all_file/assests/" . $filename;
     $file = "../all_file/assests/" . $filename;
     move_uploaded_file($file_tempname, $file_folder);


     //this is for the thumbnail upload


     $thumbnail_name = $_FILES['thumbnail']['name'];
     $thumbnail_tempname = $_FILES['thumbnail']['tmp_name'];
     $thumbnail_folder = "../../all_file/thumbnail/" . $thumbnail_name;
     $thumbnail = "../all_file/thumbnail/" . $thumbnail_name;
     move_uploaded_file($thumbnail_tempname, $thumbnail_folder);

     //Approve Variable
     $approve = "no";

     //from here the inserting is starts

     $q = " INSERT INTO `user_asset`(`name`, `description`, `file`, `thumbnail`, `owner`, `type`,`approve`) VALUES ('$name','$description','$file','$thumbnail','$owner','$type','$approve') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../../');
}
