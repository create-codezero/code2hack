<?php
include '../config/config.php';
$id = $_POST['asset_id'];

if (!empty($id)) {
     $q15 = "SELECT * FROM `assests` WHERE id = $id";
     $fire_q15 = mysqli_query($link, $q15);
     while ($row_q15 = mysqli_fetch_assoc($fire_q15)) {
          $q15_id = $row_q15['download_count'];
          $current_down = $q15_id + 1;
          $q15 = "update `assests` set download_count=$current_down where id = $id";
          $fire_q15 = mysqli_query($link, $q15);
     }
}
