<?php

function validationData(string $name, string $idade) : string 
{
    if(empty($name)){
        return 'Preencha o nome!';
    }
    
    if(strlen($name) < 3){
        return 'Digite um nome válido!';
    }
    
    if(!is_numeric($idade)){
        return 'Digite um valor numérico no campo idade!';
    }
}


?>