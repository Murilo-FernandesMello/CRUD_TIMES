<?php
    require 'dbcon.php';
?>

<!doctype html>
<html lang="pt-BR">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Detalhes do Time</title>
</head>
<body>
 <div class="container mt-5">
      <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h4>Dados do Time
                           <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                       </h4>
                   </div>


                   <div class="card-body">
                       <?php
                       if(isset($_GET['idTime'])) {
                           $time_id = mysqli_real_escape_string($con, $_GET['idTime']);
                           $query = "SELECT * FROM tbTimes WHERE idTime='$time_id' ";
                           $query_run = mysqli_query($con, $query);
                           if(mysqli_num_rows($query_run) > 0) {
                               $time = mysqli_fetch_array($query_run);
                               ?>
                                  <div class="mb-3">
                                       <label>Nome Time</label>
                                       <p class="form-control">
                                           <?=$time['time'];?>
                                       </p>
                                   </div>
                                   <div class="mb-3">
                                       <label>País</label>
                                       <p class="form-control">
                                           <?=$time['pais'];?>
                                       </p>
                                   </div>
                                   <div class="mb-3">
                                       <label>Número de Títulos</label>
                                       <p class="form-control">
                                           <?=$time['numTitulos'];?>
                                       </p>
                                   </div>



                                   <div class="mb-3">
                                       <label>Treinador</label>
                                       <p class="form-control">
                                           <?=$time['treinador'];?>
                                       </p>
                                   </div>

                                   <div class="mb-3">
                                       <label>Cor do Uniforme</label>
                                       <p class="form-control">
                                           <?=$time['corUniforme'];?>
                                       </p>
                                   </div>
                             <?php
                           }
                           else
                           {
                              echo "<h4>Nenhum ID encontrado</h4>";
                           }
                       }
                       ?>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
