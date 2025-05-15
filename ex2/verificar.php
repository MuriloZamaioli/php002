<?php
$numero = $_POST['numero'];

if($numero >= 0 && $numero <=100){
    if(($numero % 2) == 1){
        echo "Seu número é impar";
    }else{
        echo "Seu número não é impar";
    }
}else{
    echo "Digite um número entre 0 e 100";
}
?>