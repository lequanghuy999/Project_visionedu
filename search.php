
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
    <?php
        include('db/connection.php');
        if(isset($_POST['search'])) {
            $keyword = $_POST['search'];
            $sql = "SELECT * FROM news WHERE title LIKE '%$keyword%'";
        }else
        $sql = "SELECT * FROM news";
        $result = mysqli_query($conn, $sql);
    ?>
<div style="width: 70%; margin-left: 15%; padding-top: 8%;">
    <a class="btn btn-info style="text-decoration:none; padding-bottom:10px;" href="admin-home.php">Trở về trang chủ</a>
    <table style="padding-top:10px;"  class="table table-bordered">
        <tr>
            <th>title</th>
            <th>description</th>
            <th>date</th>
            <th>category</th>
            <th>thumbnail</th>
        </tr>
        <?php while($row = mysqli_fetch_array($result)) { ?>
        <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><img style="width:100px;" src="images/<?php echo $row['thumbnail']; ?>" alt=""></td>
        </tr>
        <?php } ?>
    </table>
</div>
</div>