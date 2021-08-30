<?php
    session_start();

    if($_SESSION['email']==true) {

    }else {
      header('location:index.php');
    }
    include('include/header1.php');
?>
<?php

include('db/connection.php');

$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from news where id ='$id' ");
while ($row=mysqli_fetch_array($query)) {
$id=$row['id'];
$title=$row['title'];
$description=$row['description'];
$date=$row['date'];
$thumbnail=$row['thumbnail'];
$category=$row['category'];

}

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
        <form action="news_edit.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
            <p class="h1">Update News</p>
            <hr>
            <div class="mb-3 form-group">
                <label for="email">Title:</label>
                <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title..." class="form-control" id="email">
            </div>

            <div class="mb-3 form-group">
                <label for="comment">Description:</label>
                <textarea class="form-control" placeholder="Description..." id="comment" rows="5" name="description"><?php echo $description; ?></textarea>
            </div>

            <div class="mb-3 form-group">
                <label for="email">Date:</label>
                <input type="date" name="date" value="<?php echo $date ;?>" class="form-control" id="email">
            </div>
            
            <div class="mb-3 form-group">
                <label for="email">Images:</label>
                <input type="file" name="thumbnail" value="<?php echo $thumbnail; ?>" class="form-control img-thumbnail" id="email">
                <img class="img img-thumbnail" src="images/<?php echo $thumbnail; ?>" alt=""  width="100px">
            </div>
            <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
            <div class="mb-3 form-group">
                <label for="email">Category:</label>
                <select class="form-control" name="category">
                <?php
                include('db/connection.php');
                $query=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query)) {
                ?> 
                    <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></option>
                <?php } ?>
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Update News">
        </form>
        <script>
			
       function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
         if (x=="") {
          	alert('Title Must Be Filled Out !');
          	return false;
          }
          if (y=="") {
          	alert('Description Must Be Filled Out !');
          	return false;
          }
          
       }
 
		</script>

    </div>
</div>

<?php
    include('db/connection.php');
    
    include('db/connection.php');
    if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$date=$_POST['date'];
	$thumbnail=$_FILES['thumbnail']['name'];
	$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
	$category=$_POST['category'];

	move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

	$sql= mysqli_query($conn,"update news set title='$title', description='$description' , date='$date' , thumbnail='$thumbnail' , category='$category' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('News update Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost:8081/Project-visionedu/news.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

?>


