<?php
include('conexao.php');

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sugestao = $_POST['sugestao'];
    
    $result = mysqli_query($mysqli, "INSERT INTO sugestoes(nome,email,sugestao) VALUES ('$nome','$email','$sugestao')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contato</title>
</head>
<style>

    .container-fluid{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top:200px;
    }
    .btn.btn-success{
        width:200px;
        height:50px;
    }
    
</style>
<body>

    <div class="container-fluid">
        <form action="index.php" method="POST">
            <div class="row">
            <h1 class="display-1 text-center">Mande sua sugestão</h1>
            <div class="col-md-6 offset-md-3">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
                <div class="col-md-6 offset-md-3">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="col-md-6 offset-md-3">
                    <label for="sugestao">Sugestao:</label>
                    <textarea class="form-control" name="sugestao" id="sugestao" cols="30" rows="10"></textarea>
                </div>
                <div class="col-md-6 offset-md-3 text-center">
                    <button name="submit" type="submit" class="mt-3 btn btn-sm btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
