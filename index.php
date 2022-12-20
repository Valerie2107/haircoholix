<?php

//controleur frontal


if(isset($_GET['vue'])){

    switch($_GET['vue']){
        case 'haircoholix':
            include "pages/haircoholix.php";
            break;
        case 'portfolio':
            include "pages/portfolio.php";
            break;
        case 'prices':
            include "pages/prices.php";
            break;
        default:

        include_once "pages/haircoholix.php";
    }
}else{
    include_once "pages/haircoholix.php";
}

?>