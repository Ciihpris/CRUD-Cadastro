<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Exclusão de Cadastro</title>
  </head>
  <body>
      <div class="container">
       <div class="row">
         <?php
            include "conexao.php";
            $id=$_POST['id'];
            $nome = $_POST['nome'];
          

            $sql = "DELETE FROM `cadastro` WHERE  cod_pessoa=$id";

           if (mysqli_query($conn, $sql)) {
               mensagem("$nome excluído com sucesso!",'success');
           } else 
           mensagem("$nome Não excluído!",'danger');
         ?>
          <br><a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
      </div>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>