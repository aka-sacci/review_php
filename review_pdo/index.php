<?php

require_once('product.php');
$myProduct = new Product();
$operation = $_GET['op'];

//codigo para testar listProducts().
/*
echo '<h4> produtos: <h4> <br>';
$list = $myProduct->listProducts();
    if(empty($list)){
        echo 'Lista vazia!';
        die();
    }
    echo $list;
*/
//código para testar insertProducts();
/*
$insert = $myProduct->insertProducts('teste6');
if(!$insert){
    echo 'Não foi possível inserir!';
    die();
};
echo 'Inserção realizada com sucesso!'; 
*/

//código para testar updateProducts(). Ele irá falhar caso a atualização seja identica à anterior;
/*
$update = $myProduct->updateProducts('teste7', '15');
if(!$update){
    echo 'Não foi possível atualizar!';
    die();
};
echo 'atualização realizada com sucesso!'; 
*/


//código para testar deleteProducts().
/*
$delete = $myProduct->deleteProducts('15');
if(!$delete){
    echo 'Não foi possível deletar!';
    die();
};
echo 'deleção realizada com sucesso!'; 
*/    

switch ($operation) {
    case 'list':
        echo '<h4> produtos: <h4> <br>';
        $list = $myProduct->listProducts();
        if(empty($list)){
            echo 'Lista vazia!';
            die();
        }
        echo $list;
        break;

    case 'insert':
        $insert = $myProduct->insertProducts($_GET['desc']);
        if(!$insert){
            echo 'Não foi possível inserir!';
            die();
        };
        echo 'Inserção realizada com sucesso!'; 
        break;
    
    case 'update':
        
        $update = $myProduct->updateProducts($_GET['desc'], $_GET['id']);
        if(!$update){
            echo 'Não foi possível atualizar!';
            die();
        };
        echo 'atualização realizada com sucesso!'; 
        
        break;

    case 'delete':
        $delete = $myProduct->deleteProducts($_GET['id']);
        if(!$delete){
        echo 'Não foi possível deletar!';
        die();
        };
        echo 'deleção realizada com sucesso!'; 
        break;

    default:
       echo 'selecione uma operação válida!';
        break;
}

?>