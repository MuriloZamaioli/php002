<?php
$numero = $_POST['numero'];

if($numero >= 0 && $numero <=100){
    if(($numero % 2) == 0){
        echo "Seu número é par";
    }else{
        echo "Seu número não é par";
    }
}else{
    echo "Digite um número entre 0 e 100";
}
?>
