<?php
session_start();
//$inputName = $_POST['inputName']; //recuperação de dados via post
//$inputIdade = $_POST['inputIdade'];

$inputName = $_GET['inputName']; //recuperação de dados via get
$inputIdade = $_GET['inputIdade'];

if(empty($inputName)){
    $_SESSION['formMessage'] = 'Preencha o nome!'; //empty verifica se a variável está vazia
    header("location:../index.php");
    return;
}

if(strlen($inputName) < 3){
    $_SESSION['formMessage']  =  'Digite um nome válido!'; //strlen verifica o tamanho da string
    header("location:../index.php");
    return;
}

if(!is_numeric($inputIdade)){
    $_SESSION['formMessage']  =  'Digite um valor numérico no campo idade!'; //strlen verifica o tamanho da string
    header("location:../index.php");
    return;
}


if($inputIdade >= 18){
    $_SESSION['formMessage'] = "$inputName, você ja pode ser preso";
}else{
    $idadeDiff = $inputIdade - 18;
    $idadeDiff = $idadeDiff * (-1);
    $_SESSION['formMessage'] = "$inputName, falta só $idadeDiff ano(s) pra voce poder ser preso";
    
}
        header("location:../index.php");

?> 