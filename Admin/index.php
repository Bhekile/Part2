<?php include('partials/menu.php'); ?>

        <!Main Content >
        <div class="menu-content">
            <div class="wrapper">
            <h1>Home</h1>

            <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>



<?php include('partials/footer.php');?>