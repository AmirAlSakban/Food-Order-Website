<?php 
    include('../config/constants.php');

        //termina session-ul 
    session_destroy();
        //redirect catre login
    header('location:'.SITEURL.'admin/login.php');

?>