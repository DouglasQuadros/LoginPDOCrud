<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (!isset($_SESSION['logadoM']) && $_SESSION['logadoM'] != true) {
    header("Location: login.php");
}else{
    echo $_SESSION['usuarioM'] . " | " . $_SESSION['emailM'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <title></title>
    </head>
    <body>
        <h1>Cadastro da Pessoa Jurídica</h1>
        <form action="<?php $cadUser->inserir(); ?>" method="POST">
            <input type="text" required placeholder="Razão Social..."/>
            <br><br>
            <input type="text" required placeholder="Nome Fantasia..."/>
            <br><br>
            <input type="tel" required placeholder="Telefone..." name="telefone"/>
            <br><br>
            <input type="email" placeholder="E-mail..." name="email"/>
            <br><br>
            <input type="text" required placeholder="Endereço..."/>
            <br><br>
            <input type="text" required placeholder="CNPJ..."/>
            <br><br>
            <input type="text" required placeholder="Site..."/>
            <br><br>
            <input type="submit" value="Salvar" name="salvarPF">
            <input type="reset" value="Limpar" name="limpar">
                   <input type="button" value="Voltar" 
                   onclick="location.href='../index.php'"/>
            <br><br>
            <input type="button" value="Lista Usuários" 
                   onclick="location.href='listaUsuarios.php'"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
