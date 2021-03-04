<?php
$nome = "Victor Ribeiro";
$anoNascimento = 1996;
$aprovado = true;
$nota = 10;

echo $nome . "<br>" .  $anoNascimento . "<br>" . $aprovado . "<br>" . $nota;
echo "meu nome é $nome e nasci em $anoNascimento"; 

echo "<br>";

if (isset($nome)){
    echo "variável definida";
}else{
    echo "variável ñ definida";
}



?>