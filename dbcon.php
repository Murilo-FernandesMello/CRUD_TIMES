<?php
$con = mysqli_connect("localhost","root","","bdcopa");
if(!$con){
   die('Connection Failed'. mysqli_connect_error());
}
?>
<?php
   if(isset($_SESSION['message'])) :
?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong>Aviso!</strong> <?= $_SESSION['message']; ?>
       <button type="button" class="btn-close" 
></div>
   
<?php
   unset($_SESSION['message']);
   endif;
?>
