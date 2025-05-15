<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// echo "Seu usuário é: $usuario <br>Sua Senha é: <b>CONFIDENCIAL</b>";

if($senha == 123){
    echo "Senha correta, pode entrar";
    header('Location: liberado.php');

}else{
    echo "Acesso bloqueado";
    header('Location: bloqueado.php');
}
?>