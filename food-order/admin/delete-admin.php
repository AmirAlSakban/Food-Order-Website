<?php 
    //includem constants.php
include('../config/constants.php');

    //stergem id-ul adminului
echo$id = $_GET['id'];

    // facem un query pt a sterge admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";
$res = mysqli_query($conn, $sql);

if($res==true)
    {
        $_SESSION['delete']= "<div class='success'>Admin deleted successfully</div>";
        header('location:'.SITEURL. 'admin/manage-admin.php');
    }
else
    {
        $_SESSION['delete']= "<div class='error'>Failed to delete admin</div>";
        header('location:'.SITEURL. 'admin/manage-admin.php');
    }
    //redirectionam catre manage admin


?>