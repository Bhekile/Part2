 <?php include('partials/menu.php'); ?>

 <div class="main-content">
    <div class="wrapper">
        <h1>Add Book</h1>
        <br><br> 

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

         ?>

         <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" placeholder="Book Title">
                    </td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td><input type="file" name="image"</td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>

                <tr>
                    <td>Active </td>
                    <td>
                        <input type="radio" name="available" value="Yes"> Yes
                        <input type="radio" name="available" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <input type="submit" name="submit" value="Add book" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>
        <?php 
        if(isset($_POST['Submit']))
        {
            echo "Clicked";
            $title =$_POST['title'];

            if(isset($_POST['featured']))
            {
                $featured = $_POST['featured'];
            }
            else{
                $featured ="NO";
            }
            if (isset($_POST['available'])){
                $available = $_POST['available'];
            }
            else{
                $available ="NO";
            }

                //print_r($_FILES['image']);
                //die();
            if(isset($_FILES['image']['name']));
            $soure_path = $_FILES['image']['tmp_name']
            {
                $image_name
            }


            $sql ="INSERT INTO tbl_books SET
                title='$title'
                featured='$featured'
                active='$available'
                ";
            $res =mysqli_query($conn,$sql);

            if($res==true){
                $_SESSION['add']="<div class='success'>Book Successfully.</div>";
                header('location:'.SITEURL.'admin/manage-books.php');
            }
            else{
                $_SESSION['add']="<div class='error'>Failed to add Book.</div>";
                header('location:'.SITEURL.'admin/addbook.php'); 
            }
        }
        ?>
    </div>
 </div>

 <?php include('partials/footer.php');?>