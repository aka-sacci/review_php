<?php

//$inputName = $_POST['inputName']; //recuperação de dados via post
//$inputIdade = $_POST['inputIdade'];

$inputName = $_GET['inputName']; //recuperação de dados via get
$inputIdade = $_GET['inputIdade'];



if($inputIdade >= 18){
echo "$inputName, você ja pode ser preso";
}else{
    $idadeDiff = $inputIdade - 18;
    $idadeDiff = $idadeDiff * (-1);
    echo "$inputName, falta só $idadeDiff ano(s) pra voce poder ser preso";
}


?>