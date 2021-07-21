<?php
session_start();
include_once('services/validation.php');
//$inputName = $_POST['inputName']; //recuperação de dados via post
//$inputIdade = $_POST['inputIdade'];


$inputName = $_GET['inputName']; //recuperação de dados via get
$inputIdade = $_GET['inputIdade'];
$validacao = validationData($inputName, $inputIdade);

    if(!empty($validacao)){
    $_SESSION['formMessage']  = $validacao;
    }

    else{
            if($inputIdade >= 18){
            $_SESSION['formMessage'] = "$inputName, você ja pode ser preso";
            }else{
            $idadeDiff = $inputIdade - 18;
            $idadeDiff = $idadeDiff * (-1);
            $_SESSION['formMessage'] = "$inputName, falta só $idadeDiff ano(s) pra voce poder ser preso";
            }
    }
        header("location:../index.php");

?> 