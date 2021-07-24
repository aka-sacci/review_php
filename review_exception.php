<?php

//throw new Exception("Exception tested", 1); //interrompe o código imediatamente, 
//então nada mais será executado
//echo "teste";

function validUser(array $user) : bool
{

    if(empty($user['id']) ||
    empty($user['name']) || 
    empty($user['yo'])) 
    {
        throw new Exception("Preencha todos os campos!", 10001); //message, code
    }
    return true;
}

$user = [
    'id' => 1,
    'name' => '6',
    'yo' => 10
];

    //trata a excessão e exibe uma mensagem amigável ao usuário.
    try{
    $validation = validUser($user);
    }
    catch(Exception $e){
    echo $e->getCode() . ": " . $e->getMessage();
    die();
    }
    finally{ //sempre executado dps do try/catch se passar o try
        echo 'status: ' . (int)$validation;
    }

    echo 'Usuário validado!';
?>