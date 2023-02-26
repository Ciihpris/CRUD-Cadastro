<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro</title>
  </head>
  <body>
      <div class="container">
       <div class="row">
         <div class="col">
         <h1>Cadastro</h1>
         <form action="cadastro_script.php" method="POST">
         <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" name="nome">
            </div>
            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text"  class="form-control" name="endereco">
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="number" class="form-control" name="telefone">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control"  name="email">
            </div>
            <div class="form-group">
              <label for="data_nascimento">Data de Nascimento</label>
              <input type="date" class="form-control" name="data_nascimento">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
           <a href="index.php" class="btn btn-info">Voltar para o Ìnicio</a>
         </div>
       </div>
   </div>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>