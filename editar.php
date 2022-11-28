
<?php 

require_once('conexao.PHP');

$codigo= $_GET['codigo'];
$sql_consulta=mysqli_query($ligar, "SELECT *FROM tb_usuarios WHERE id='$codigo' ");
$resultado=mysqli_fetch_array($sql_consulta);

?>

 <marquee>    <h1> EDITAR REGISTROS </h1>   </marquee>

<hr>
<center>  NOME:  <?=$resultado[1]   ?>  </center>
<hr>



<form  method="POST" action="actualizar.php">
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    NOME: <br>
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    SOBRENOME: <br>
    <input type="text" name="usuario"   value='<?=$resultado[1]   ?>' ><br>
    EMAIL: <br>
    <input type="email" name="email"    value='<?=$resultado[2]   ?>'><br>
    SENHA: <br>
    <input type="password" name="senha"   value='<?=$resultado[3]   ?>' ><br> 
    IDADE: <br>
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    TELEFONE: <br>
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    CPF: <br>
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    ESTADO: <br>
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    GENERO: <br>
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    CIDADE: <br>
    NÍVEL: <br>
    <select name="nivel" > 
       
        <option value="<?=$resultado[4]   ?>" >   <?=$resultado[4]   ?></option>
             <option value="Admin">  Administrador    </option>
            <option value="Cliente">   Cliente  </option>
    </select>

    <br> <br>
    <input type="submit" value="Actualizar">


