<?php

require_once 'src/header.php';
require_once 'src/function.php';


$page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);

/*if($page == 'connexion'){
    require_once 'src/connexion.php';

}else{
    if($page == 'traitement'){
        require_once 'src/traitement.php';
    }else{
        echo '<h1>PAGE DE MERDEE</h1>';
    }
    
}*/
switch($page){
    case 'ds':
        if (!file_exists('src/ds.php')){
            error();
        }else{
        require_once 'src/ds.php';
         break;}

    case 'recupds': 
        if (!file_exists('src/recupds.php')){
            error();
        }else{
        require_once 'src/recupds.php';
        break;}


    default:
        echo '<h1> Page index classique </h1>';
        break;
}

//require_once 'src/connexion.php';

//<script>alert('Attaque XSS');</script>

