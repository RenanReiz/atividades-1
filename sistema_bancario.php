<?php
//variaveis 
$nome = "Renan dos Santos";
$saldo = 1000000.00;
$valor_do_saque = 500000.00;
if ($valor_do_saque <= $saldo) {
    echo "saque realizado com sucesso";
} else {
    echo "saque nao realizado, saldo insuficiente";
} 
?>  