<?php
include('../config/constants.php');    

    // verif daca valorile pt id si image_name sunt setate 
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        //stergem valoarea
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        //eliminam imaginea daca exista
        if($image_name !="")
        {
            $path = "../images/category/".$image_name;
            $remove = unlink($path);
            
            //daca eliminarea imaginii esueaza
            if($remove==false)
            {
                $_SESSION['remove'] = "<div class='error>Failed to remove Category image</div>";
                header('location'.SITEURL.'admin/manage-category.php');
                die();
            }
        }
        //stergem datele din bd
        $sql = "DELETE FROM tbl_category WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        //verif daca datele au fost sterse
        if($res==true)
        {
            $_SESSION['delete']= "<div class='success'>Category Deleted successfully.</div>";
            header('location'>SITEURL.'admin/manage-category.php');
        }
        else
        {
            $_SESSION['delete']= "<div class='error'>Failed to delete category.</div>";
            header('location'>SITEURL.'admin/manage-category.php');
        }
        //redirectionam catre manage category
        
    }
    else
    {
        
        header('location:' .SITEURL. 'admin/manage-category.php');
    }

?>