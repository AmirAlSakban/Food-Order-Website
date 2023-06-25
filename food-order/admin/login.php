<?php include('../config/constants.php');?>
   

   <html>
    <head>
        <title>Login - Food Order System</title>
         <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1> <br><br>
            
            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            
                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }

            ?> <br><br>
            
            <!--facem formular de login -->
            <form action="" method="POST" class="text-center">
                Username: <br>
                <input type="text" name="username" placeholder="Enter username">
                <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter password">
                <br><br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
            </form>
            <br><br>
            
            <p class="text-center">Created by Amir</p>
        </div>
        
    </body>
</html>


<?php

//verif daca butonul submit a fost apasat
if(isset($_POST['submit']))
{
    //mysqli_real_escape_string previne injectia
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);
    
    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
    
    $res = mysqli_query($conn, $sql);
    
    $count = mysqli_num_rows($res);
    
    if($count==1)
    {
        //login reusit
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username; //verifica daca userul e logat
        //redirectionam catre homepage
        header('location:'.SITEURL.'admin/');
    }
    else
    {
        //login nereusit
        $_SESSION['login'] = "<div class='error text-center'>Username sau parola incorecte</div>";

        //redirectionam catre homepage
        header('location:'.SITEURL.'admin/login.php');
    }
}

?>