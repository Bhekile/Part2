<?php include('partials/menu.php'); ?>

<div class="menu-content">
    <div class="wrapper">
        <h1>All Books</h1>
        <br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

         ?>
         <br><br>

            

       
    </div>
</div>

<?php include('partials/footer.php'); ?>