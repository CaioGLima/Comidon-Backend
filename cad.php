
<?php

require_once('conexao.php');

$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$idade= $_POST['idade'];
$telefone= $_POST['telefone'];
$cpf= $_POST['cpf'];
$estado= $_POST['estado'];
$genero= $_POST['genero'];
$cidade= $_POST['cidade'];
$nivel= $_POST['nivel'];


$sql_cad=mysqli_query( $ligar , " INSERT INTO tb_usuarios (nome, sobrenome, email, senha, idade, telefone, cpf, estado, genero, cidade) VALUES ('$nome','$sobrenome','$email','$senha','$idade', '$telefone', '$cpf', '$estado', '$genero', '$cidade','$nivel)");

if($sql_cad==true) {

    echo " <script>

    alert('Cadastro Feito com Sucesso ');
    window.location.href='index.html';
    
    </script>";


}

else {

    echo " <script>

    alert(' Falha no Cadastro ');
    alert(' Já existe um Usuário com este Email ');
    window.location.href='cad.html';
    </script>";


}



?>