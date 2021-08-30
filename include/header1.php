<?php
include('db/connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css-bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style-admin.css">
    <title>Admin main</title>
</head>

<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Huy<span>Kazy</span></h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>
            <a style="" class="logout_btn1" href="change-password.php"><?php echo $_SESSION['email'] ?></a>
        </div>
    </header>

    <div class="sidebar">
        <center>
        <?php
            $email=$_SESSION['email'];
            $sql =  "SELECT * FROM admin_login where email='$email'";
            $result = mysqli_query($conn,$sql);
            
            while($row = mysqli_fetch_assoc($result)){
            echo '<img src="'.$row['images_admin'].'" class="profile_image" alt="">';
            echo '<h4>'.$row['name'].'</h4>';
            echo '<hr>';
            
        }  
        ?>
        </center>
        <a href="admin-home.php"><i class="fas fa-desktop <?php if($page=='home'){echo 'active';} ?>"><span>Dashboard</span></i></a>
        <a href="category.php"><i class="fas fa-cogs <?php if($page=='category'){echo 'active';} ?>"><span>Category</span></i></a>
        <a href="news.php"><i class="fas fa-table <?php if($page=='news'){echo 'active';} ?>"><span>News</span></i></a>
        <a href="advise.php"><i class="fas fa-th <?php if($page=='home'){echo 'active';} ?>"><span>Advise</span></i></a>
        <a href="about.php"><i class="fas fa-info-circle <?php if($page=='about'){echo 'active';} ?>"><span>About</span></i></a>
        <!-- <a href="home.php"><i class="fas fa-sliders-h <?php if($page=='home'){echo 'active';} ?>"><span>Settings</span></i></a> -->
    </div>
    