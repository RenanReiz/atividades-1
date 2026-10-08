<?php
// cadastro do cliente
$nome = "Renan dos Santos";
echo "nome do cliente é:",  ".$nome";
echo "<br>";
//notas
$nota1 = 8.5;
$nota2 = 7.0;
echo "nota 1 é: ", "$nota1" . "<br>";
echo "nota 2 é: ", "$nota2" . "<br>";
//media
$media = ($nota1 + $nota2) / 2;
echo "a media do aluno é; ", "$media" . "<br>";
//resultado
if ($media >= 7) {
    echo "o aluno foi aprovado";
} elseif ($media >= 5) {
    echo "o aluno está de recuperação";
} else { 
    echo "voce esta reprovado";
}
?>