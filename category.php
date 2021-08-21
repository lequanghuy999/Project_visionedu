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
    <div style="width: 70%; margin-left: 15%;padding-top:6.5%;">
        <div style="width:80%, margin-left:17%; margin-bottom:50px;">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="admin-home.php">Admin Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ul>
        </div>
        <div class="text-right">
            <button style="margin-bottom:20px;" class="btn btn-primary"><a style="color:#fff;text-decoration: none;" href="addcategory.php">Add Category</a></button>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                include('db/connection.php');
                $query=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query)){
                    
            
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['category_name'];?></td>
                    <td><?php echo substr($row['des'],0,200);?></td>
                    <td><a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-info">edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
        </table>
    </div>
</div>


<?php
include('include/footer.php')
?>