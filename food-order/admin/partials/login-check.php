<?php
    if(!isset($_SESSION['user']))
    {
        //userul nu e logat, redirectionam catre login
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        header('location:'.SITEURL.'admin/login.php');
          
        
    }
?>