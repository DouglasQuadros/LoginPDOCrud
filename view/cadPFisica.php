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
        <h1>Cadastro da Pessoa Física</h1>
        <form action="<?php $cadUser->inserir(); ?>" method="POST">
            <input type="text" required placeholder="Nome aqui..." name="nome"/>
            <br><br>
            <input type="tel" required placeholder="Telefone aqui..." name="telefone"/>
            <br><br>
            <input type="email" required placeholder="E-mail aqui..." name="email"/>
            <br><br>
            <input type="text" placeholder="Endereço aqui..." name="endereco"/>
            <br><br>
            <input type="text" required placeholder="CPF aqui..." 
                   minlength="11" maxlength="11" name="cpf"/>
            <br><br>
            <input type="text" placeholder="RG aqui..." minlength="10" maxlength="10" name="rg"/>
            <br><br>
            <input type="radio" value="F" name="sexo">Feminino
            <input type="radio" value="M" name="sexo">Masculino
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
