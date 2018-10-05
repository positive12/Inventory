<?php
  require 'connect.php';
  
    if(isset($_GET ['id'])) {
      $id = $_GET['id'];
      $delete = ("DELETE FROM server where s_id = '$id'");
      mysqli_query($db, $delete);
      
      
      header ('Location:/item.php');
    }

?>