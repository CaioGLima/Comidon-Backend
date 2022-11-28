<?php 
require_once('conexao.php');

$codigo= $_POST['txtcodigo'];
$nome= $_POST['usuario'];
$nusuario= $_POST['nusuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$idade= $_POST['nivel'];
$telefone= $_POST['txtcodigo'];
$cpf= $_POST['usuario'];
$estado= $_POST['email'];
$cidade= $_POST['senha'];
$tipo= $_POST['nivel'];

$sql_atualizar=mysqli_query($ligar, " UPDATE tb_usuarios set nome='$nome',nusuario='$nusuario', email='$email', senha='$senha',idade='$idade',telefone='$telefone',cpf='$cpf',estado='$estado',cidade='$cidade',tipo='$tipo', WHERE id='$codigo' ");

if ($sql_atualizar==true){

    print "<script>
    
    alert('Usuário Actualizado com Sucesso');
    window.location.href='listaUsuario.php';
    
    
    </script>";

}else{

    echo "<script>
    
    alert('Falha ao actualizar dados');
    window.location.href='editar.php';
    
    
    </script>";

}



?>