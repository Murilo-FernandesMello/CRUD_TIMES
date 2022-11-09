<?php
session_start();
require 'dbcon.php';


if(isset($_POST['delete_time'])){
   $time_id = mysqli_real_escape_string($con, $_POST['delete_time']);
   
   $query = "DELETE FROM tbTimes WHERE idtime='$time_id' ";
   $query_run = mysqli_query($con, $query);

   if($query_run) {
       $_SESSION['message'] = "Time excluido com sucesso";
       header("Location: index.php");
       exit(0);
   }   else   {
       $_SESSION['message'] = "Não foi possivel excluir o time";
       header("Location: index.php");
       exit(0);
   }
 }
 if(isset($_POST['update_time'])){
   $time_id = mysqli_real_escape_string($con, $_POST['time_id']);
   $time = mysqli_real_escape_string($con, $_POST['time']);
   $pais = mysqli_real_escape_string($con, $_POST['pais']);
   $numTitulos = mysqli_real_escape_string($con, $_POST['numTitulos']);
   $treinador = mysqli_real_escape_string($con, $_POST['treinador']);
   $corUniforme = mysqli_real_escape_string($con, $_POST['corUniforme']);

   $query = "UPDATE tbTimes SET time='$time', pais='$pais', numTitulos='$numTitulos', treinador='$treinador', corUniforme='$corUniforme' WHERE idTime='$time_id' ";
  
   $query_run = mysqli_query($con, $query);
  
  if($query_run) {
       $_SESSION['message'] = "Time atualizado com sucesso estive aqui";
       header("Location: index.php");
       exit(0);
   }   else   {
       $_SESSION['message'] = "Aluno não atualizado";
       header("Location: index.php");
       exit(0);
   }
 }

 if(isset($_POST['save_time'])){
   $time = mysqli_real_escape_string($con, $_POST['time']);
   $pais = mysqli_real_escape_string($con, $_POST['pais']);
   $numTitulos = mysqli_real_escape_string($con, $_POST['numTitulos']);
   $treinador = mysqli_real_escape_string($con, $_POST['treinador']);
   $corUniforme = mysqli_real_escape_string($con, $_POST['corUniforme']);
   $query = "INSERT INTO tbTimes (time,pais,numTitulos,treinador,corUniforme) VALUES ('$time','$pais','$numTitulos','$treinador','$corUniforme')";
  $query_run = mysqli_query($con, $query);
   if($query_run)  {
       $_SESSION['message'] = "Time cadastrado com sucesso!";
       header("Location: time-create.php");
       exit(0);
   }  else  {
       $_SESSION['message'] = "Time não cadastrado";
       header("Location: time-create.php");
       exit(0);
   }
}
?>
