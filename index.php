<?php
    // require_once 'classe/Pessoa.php';
    // if(isset($_POST['btnCadP'])){
    //         $pessoa = new Pessoa();
    //         $pessoa->email = $_POST['txt_email'];
    //         $pessoa->nome = $_POST['txt_nome'];
    //         $pessoa->telefone = $_POST['txt_telefone'];
    //         $pessoa->foto = $_POST['txt_foto'];          
    //         if($pessoa->cadastrar()){
    //             echo '<script>alert("Pessoa cadastrada!!!")</script>';
    //         }
    //         else{
    //             echo '<script>alert("Erro ao cadastrar!!!")</script>';                
    //         }
    //     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>    
    <!-- <form method="post">
        <input type="text"   name="txt_email"     placeholder="E-mail"><br>
        <input type="text"   name="txt_nome"      placeholder="Nome"><br>
        <input type="text"   name="txt_telefone"  placeholder="Telefone"><br>
        <input type="text"   name="txt_foto"      placeholder="Link foto"><br>
        <input type="submit" name="btnCadP" value="Cadastrar" >
    </form> -->

    <?php
        // require_once 'classe/Pessoa.php';
        // $p = new Pessoa();
        // var_dump($p->listar());
    ?>

    <hr>

    <?php
    require_once 'classe/Produto.php';
    if(isset($_POST['btnCadPr'])){
            $produto = new Produto();
            $produto->nome = $_POST['txt_nomeP'];
            $produto->valor = $_POST['txt_valor'];
            $produto->descricao = $_POST['txt_descricao'];          
            $produto->quant_est = $_POST['txt_quant'];
            if($produto->cadastrar()){
                echo '<script>alert("Produto cadastrado!!!")</script>';
            }
            else{
                echo '<script>alert("Erro ao cadastrar!!!")</script>';                
            }
        }
?>

    <form method="post" style="display: flex;justify-content: center, align-items: center">
        <input type="text"   name="txt_nomeP"     placeholder="Nome"><br>
        <input type="text"   name="txt_valor"      placeholder="Valor"><br>
        <input type="text"   name="txt_descricao"  placeholder="Descrição"><br>
        <input type="text"   name="txt_quant"      placeholder="Quantidade em Estoque"><br>
        <button type="submit" name="btnCadPr" class="btn btn-primary">Cadastrar</button>
    </form>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">valor</th>
      <th scope="col">descricao</th>
      <th scope="col">quantidade_estoque</th>
    </tr>
  </thead>
  <tbody>

  <form method="post" style="display: flex;justify-content: center, align-items: center">
        <input type="text"   name="filtro"     placeholder="Filtro"><br>
        <button type="submit" name="btnFiltro" class="btn btn-primary">Filtrar</button>
    </form>
  <?php
    if(isset($_POST['btnFiltro'])){
        $filtro = $_POST['filtro'];
    }
    else{
        $filtro = "";
    }
        require_once 'classe/Produto.php';
        $p = new Produto();
        // var_dump($p->listar());
        foreach ($p->listar($filtro) as $i) {
            echo "
            <tr>
                <th scope='row'>$i->id</th>
                <td>$i->nome</td>
                <td>$i->valor</td>
                <td>$i->descricao</td>
                <td>$i->quant_est</td>
            </tr>
        ";
        }
       
    ?>
    
  </tbody>
</table>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
