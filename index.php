<?php

include_once "paginas/includes/header.php";

$paginas = isset($_GET['pg']);

if ($paginas) {
    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;
             case'dailyhoroscope':
                include_once "paginas/dailyhoroscope.php";
                break;
                case'templantes':
                    include_once "paginas/templantes.php";
                    break;
                case'sobre':
                    include_once "paginas/sobre.php";
                    break;
        default:
            # code...
            break;
    }
} else {
 include_once "paginas/inicial.php";
}


include_once "paginas/includes/footer.php";


?>