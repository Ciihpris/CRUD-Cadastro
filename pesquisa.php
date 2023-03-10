<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Pesquisar</title>
  </head>
  <body>
        <?php
         
            $pesquisa = $_POST['busca'] ?? '';
          
            include "conexao.php";

            $sql = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisa%' ";
            
            $dados = mysqli_query($conn, $sql);
        ?>
      <div class="container">
       <div class="row">
         <div class="col">
         <h1>Pesquisar</h1>
         <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="form-inline" action="pesquisa.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>

<table class="table table-hover">
  <thead>
     <tr>
       <th scope="col">Nome</th>
       <th scope="col">Endereço</th>
       <th scope="col">Telefone</th>
       <th scope="col">Email</th>
       <th scope="col">Data de Nascimento</th>
       <th scope="col">Funçôes</th>
     </tr> 
  </thead>
  <tbody>

    <?php 
         while ($linha = mysqli_fetch_assoc($dados)){
            $cod_pessoa = $linha ['cod_pessoa'];
            $nome = $linha ['nome'];
            $endereco = $linha ['endereco'];
            $telefone = $linha ['telefone'];
            $email = $linha ['email'];
            $data_nascimento = $linha ['data_nascimento'];
            $data_nascimento = mostra_data($data_nascimento);
            
            echo "<tr>
                     <th scope='row'>$nome</th>
                     <td>$endereco</td>
                     <td>$telefone</td>
                     <td>$email</td>
                     <td>$data_nascimento</td>
                     <td width=150px>
                         <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                         <a href '#' class='btn btn-danger btn-sm'data-bs-toggle='modal' data-bs-target='#confirma'
                         onclick=" .'"' ."pegar_dados($cod_pessoa,'$nome')".'"'.">Excluir</a>
                     </td>
                 </tr>";
         }
    ?>
            <!--onclick="pegar_dados($id,'$nome')" -->
  </tbody>
</table>
</table>
           <a href="index.php" class="btn btn-info">Voltar para o Ìnicio</a>
         </div>
       </div>
   </div>  
<!-- Modal -->
<div class="modal fade" id="confirma" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmação de exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="excluir_script.php" method="POST"
        <p>Deseja realmente excluir <b id="nome_pessoa"> Nome da pessoa </b>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="id"  id="cod_pessoa" value="">
        <input type="hidden" name="nome"  id="nome_pessoa_1" value="">
        <input type="submit" class="btn btn-danger" value="Sim">
      </div>
    </div>
  </div>
</div>

            <script type="text/javascript">
                function pegar_dados(id,nome){
                    document.getElementById('nome_pessoa').innerHTML = nome;
                    document.getElementById('nome_pessoa_1').value= nome;
                    document.getElementById('cod_pessoa'). value= id;
                }
            </script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>