<?php
    session_start();
    error_reporting(0);
    if($_SESSION['email']==true) {

    }else {
      header('location:admin_login.php');
      $page='category';
    }
    include('include/header1.php');
?>
<div class="content">
    <div style="width: 90%; margin-left: 5%;padding-top:6.5%;">
        <div style="width:80%, margin-left:17%; margin-bottom:20px;">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="admin-home.php">Dashboard</a></li>
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
                $page=$_GET['page'];
                if($page=="" || $page==1){
                    $page1=0;
                }
                else{
                    $page1=($page*3)-1;

                }
                $i = 0;
                $query=mysqli_query($conn,"select * from category limit $page1,5");
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
        <ul class="pagination">
            <li class="page-item disabled">
                <a href="#" class="page-link" >Pervious</a>
            </li>
            <?php

            $sql=mysqli_query($conn,"select * from category");
            $count=mysqli_num_rows($sql);
            $a=$count/3;
            ceil($a);
            for ($b=1; $b <=$a ; $b++) { 
            ?>
            <li class="page-item"><a class="page-link" href="category.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
            <?php 
            }
            ?>
            <li class="page-item disabled">
                <a href="#" class="page-link" >Next</a>
            </li>
       </ul>
    </div>
</div>


<?php
include('include/footer.php')
?>