<?php include('../config/constants.php');?>

<html>
    <head>
        <title>Login -BookWorm Store</title>
        <link rel="stylesheet" href="../css/Admin.css">
    </head>

    <body>
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>
            <br><br>

            <form action="" method="POST" class="text-center">
                Username: <br>
                <input type="text" name="username" placeholder="Enter username"><br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter Password"><br><br>
                <br><br>
                <input type="Submit" name="Submit" placeholder="btn-primary">
            </form>

            <p class="text-center">Created by Bhekile Mngwenya & Precious Molele</p>
    </body>
</html>

<?php 
    if (isset($_POST['Submit']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql ="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        $count =mysqli_num_rows($result);

        if($count==1){
            $_SESSION['login'] = "<div class='success'>LoginSuccessful.</div>";
            $_SESSION['user'] = $username;

            header('location:'.SITEURL.'admin/');
        }
        else{
            $_SESSION['login'] = "<div class='error text-center'>Username or Paasword did not match.</div>";
            header('location:'.SITEURL.'admin/login.php');
        }
    }
?>

<?php include('partials/footer.php');?>