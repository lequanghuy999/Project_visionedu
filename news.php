<?php
    session_start();

    if($_SESSION['email']==true) {

    }else {
      header('location:index.php');
      $page='news';
    }
    include('include/header1.php');
?>
<div class="content">
    <div style="width: 70%; margin-left: 15%; padding-top: 6.5%;">
        <div style="width:80%, margin-left:17%; margin-bottom:50px;">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="admin-home.php">Admin Home</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ul>
        </div>
        <div class="text-right">
            <button style="margin-bottom:20px;" class="btn btn-primary"><a style="color:#fff;text-decoration: none;" href="addnews.php">Add News</a></button>
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
            
            ?>
        </table>
    </div>
</div>

<?php
include('include/footer.php')
?>