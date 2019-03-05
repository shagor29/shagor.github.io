<?php 
    $con = mysqli_connect('localhost','root','','db_laundry');
    if($con){
      echo"connected success <br>";
    }
    else{
      echo" something went wrong";
    }
?>