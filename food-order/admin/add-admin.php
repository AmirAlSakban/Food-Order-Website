<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <br>
        
        <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];//mesajul de confirmare
                    unset($_SESSION['add']);//eliminam mesajul de confirmare dupa refresh
                }
        ?>
            
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                </tr>
                
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Enter your username"></td>
                </tr>
                
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter password"></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>


<?php
    //salveaza datele din formular in bd
    //verifica daca butonul a fost apasat sau nu
    if(isset($_POST['submit']))
    {
        //Butonul a fost apasat
        
        //ia datele din formular
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //md5 e pt a cripta parola
        
        
        //sql squery pt a salva datele in bd
        $sql = "INSERT INTO     tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
        
        //executam query-ul si salvam datele in bd
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        // verificam daca datele au fost salvate si afisam un mesaj corespunzator
        if($res==TRUE)
        {
            //cream o session variable pt a afisa msj
            $_SESSION['add'] = "<div class='success'>Admin added successfully</div>";
            //redirectionam catre manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //cream o session variable pt a afisa msj
            $_SESSION['add'] = "<div class='error'>Failed to add admin</div>";
            //redirectionam catre manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
    }
    

?>
