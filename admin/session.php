
<?php
   session_start();
   if(!isset($_SESSION['Admin'])){
    header('location: http://localhost:8080/Project/admin/');
   }
?>
