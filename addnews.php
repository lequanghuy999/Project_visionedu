<?php
    session_start();

    if($_SESSION['email']==true) {

    }else {
      header('location:index.php');
      $page='prductt';
    }
    include('include/header1.php');
?>

<div class="content">
    <div style="width: 70%; margin-left: 15%;padding-top: 85px;">
        <div style="width:80%, margin-left:17%;">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a href="admin-home.php">Admin Home</a></li>
                <li class="breadcrumb-item active"><a href="news.php">News</a></li>
                <li class="breadcrumb-item active">Add News</li>
            </ul>
        </div>
        <form action="addcategory.php" method="post" name="categoryform" onsubmit=" return validateform() ">
            <p class="h1">Add News</p>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title:</label>
                <input type="text" name="category" placeholder="Title..." class="form-control" id="email">
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Description:</label>
                <textarea class="form-control" placeholder="Description..." id="comment" rows="5" name="des"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date:</label>
                <input type="date" name="date" class="form-control" id="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Images:</label>
                <input type="file" name="date" class="form-control img-thumbnail" id="email">
            </div>

            <div class="mb-3">
                <label for="email">Category:</label>
                <select name="category" id="">
                <?php
                include('db/connection.php');
                $query=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query)) {
                    $category=$row['category_name'];
                ?> 
                    <option value=""><?php echo $row['category_name'];?></option>
                <?php } ?>
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
        </form>
        <script>
            function validateform(){
                var x = document.forms['categoryform']['title'].value;
                var y = document.forms['categoryform']['description'].value;
                var z = document.forms['categoryform']['date'].value;
                var w = document.forms['categoryform']['category'].value;
                if (x=="") {
                    alert('category Must Be Filled Out !'); // báo lỗi kho bỏ trống category hay categoryform
                    return false;
                }
                if (y=="") {
                    alert('category Must Be Filled Out !'); // báo lỗi kho bỏ trống category hay categoryform
                    return false;
                }
                if (y.length<100) {
                    alert('Description Atleast 100 character !'); // báo lỗi kho bỏ trống category hay categoryform
                    return false;
                }
                if (w=="") {
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


