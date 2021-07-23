<?php

//throw new Exception("Exception tested", 1); //interrompe o código imediatamente, 
//então nada mais será executado
//echo "teste";

function validUser(array $user) : bool
{

    if(empty($user['id']) || empty($user['name']) || empty($user['yo'])) {
        return false;
    }

    return true;

}

$user = [
    'id' => 1,
    'name' => 'gerso',
    'yo' => 10
];

$validation = validUser($user);

if(!$validation)
{
    echo "invalid user!";

}else{

    echo "valid user";

};

?>