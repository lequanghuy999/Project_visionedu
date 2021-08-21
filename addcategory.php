<?php
    session_start();

    if($_SESSION['email']==true) {

    }else {
      header('location:admin_login.php');
      $page='category';
    }
    include('include/header1.php');
?>
<div class="content">
    <div style="width: 70%; margin-left: 15%;padding-top: 85px;">
        <div style="width:80%, margin-left:17%;margin-bottom:50px;">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a href="admin-home.php">Admin Home</a></li>
                <li class="breadcrumb-item active"><a href="category.php">Category</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ul>
        </div>
        <form action="addcategory.php" method="post" name="categoryform" onsubmit=" return validateform() ">
            <p class="h1">Add Categories</p>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Category:</label>
                <input type="text" name="category" placeholder="Enter Category Name" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Description:</label>
                <textarea class="form-control" placeholder="Enter Category Description" id="comment" rows="5" name="des"></textarea>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
        </form>
        <script>
            function validateform(){
                var x = document.forms['categoryform']['category'].value;
                if (x=="") {
                    alert('category Must Be Filled Out !'); // báo lỗi kho bỏ trống category hay categoryform
                    return false;
                }
            }

        </script>

    </div>
</div>
<?php
include('include/footer.php');
?>

<?php
include('db/connection.php');

if(isset($_POST['submit'])) {

    $category_name=$_POST['category'];
    $des=$_POST['des'];
    $check=mysqli_query($conn,"select * from category where category_name='$category_name'");

    if(mysqli_num_rows($check) > 0) {
        echo " <script> alert('Category Name Already Be Taken !!')</script>";
    }else {


    $query=mysqli_query($conn,"insert into category(category_name,des)
        values('$category_name','$des')");

    if($query){
        echo "<script> alert('Category Add Successfully!')</script>";
    }else {
        echo "<script> alert('Error. Please try Again!')</script>";
    }

}
}
?>
