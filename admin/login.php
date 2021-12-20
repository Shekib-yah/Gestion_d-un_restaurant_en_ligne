<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Espace administation</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body >
        
        <div class="login">
            <h1 class="text-center">Connexion</h1>
            <br><br>

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
            ?>
        

            <!-- Login Form Starts HEre -->
            <form action="" method="POST" class="text-center">Nom d'utilisateur <br>
            <input type="text" name="username" placeholder="écrire ton nom d'utilisateur"><br><br>

           Mot de passe <br>
            <input type="password" name="password" placeholder="écrire ton mot de passe"><br><br>

            <input type="submit" name="submit" value="Connecter" class="btn-primary">
            <br><br>
            </form>
            <!-- Login Form Ends HEre -->

            
        </div>

    </body>
</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Connexion réussie   .</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Le nom d'utilisateur ou le mot de passe ne correspondent pas</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>