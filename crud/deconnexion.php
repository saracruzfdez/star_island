<?php require_once 'config/function.php';
require_once 'inc/header.inc.php';


if (isset($_SESSION) && !empty($_SESSION)) {

    
    session_destroy();

    
    header("Location: index.php");
}
    ?>