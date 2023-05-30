<?php include('partials/menu.php') ?>
<div class="menu-content">
            <div class="wrapper">
            <h1>Add Admin</h1>
            <br>

            <form action="" method="post" enctype="multipart/form-data">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                    </tr>

                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name="username" placeholder="Your Username">
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="username" placeholder="Your Password">
                    </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secon">
                    </td>
                    </tr>

                </table>
            </div>
</div>

<?php include('partials/footer.php') ?>

<?php   
if(isset($_POST['Submit']))
    {
       // echo "Button Clicked";
       //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); 

        // Save the data into database
        $sql ="INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username', 
        password='$password'
        ";

        $res = mysqli_query($conn, $sql);
        if($res==TRUE)
        {
            //echo "Data Inserted";
        $_SESSION['add'] = "Failed to Add Admin";
        header("location:".SITEURL.'admin/manageadmin.php');
        }
        else
        {
            //echo "Failed to insert data";
            $_SESSION['add'] = "Admin added Successfully";
            header("location:".SITEURL.'admin/add admin.php');
        }
    }
?>