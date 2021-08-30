<?php
    session_start();
    error_reporting(0);
    if($_SESSION['email']==true) {

    }else 
    header('location:index.php');
    $page='news';
    include('include/header1.php');
?>
<div class="content">
    <div style="width: 90%; margin-left: 5%; padding-top: 6.5%;">
        <div style="width:80%, margin-left:17%; margin-bottom:20px;">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="admin-home.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Advise</li>
                </ul>
        </div>
        <table class="table table-bordered" style="width:100%;">
            <tr>
                <th>id</th>
                <th>Họ Tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>mong muốn</th>
                <th>thông tin thêm</th>
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
                $query=mysqli_query($conn,"select * from advise limit $page1,3");
                while ($row=mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name_st']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['abroad']; ?></td>
                    <td><?php echo $row['info']; ?></td>
                    <td><a href="advise_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php } ?>
        </table>
        <ul class="pagination">
            <li class="page-item disabled">
                <a href="#" class="page-link" >Pervious</a>
            </li>
            <?php

            $sql=mysqli_query($conn,"select * from advise");
            $count=mysqli_num_rows($sql);
            $a=$count/3;
            ceil($a);
            for ($b=1; $b <=$a ; $b++) { 
            ?>
            <li class="page-item"><a class="page-link" href="advise.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
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
include('include/footer.php');
?>