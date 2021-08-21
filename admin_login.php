<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css-bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="container">
    <form action="admin_login.php" method="post">
        <p class="h3">Admin login</p>
        <div class="mb-3">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" name="password" id="pwd">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="login">
    </form>
    </div>
    <script src="js-bootstrap/bootstrap.min.js"></script>
    <script src="js-bootstrap/bootstrap.js"></script>
</body>
</html>

<?php
    include('db/connection.php');

        if(isset($_POST['submit'])) {
           $email=$_POST['email'];
           $password=$_POST['password'];

           $query=mysqli_query($conn,"select * from admin_login where email='$email' and password='$password' ");

           if($query) {
               if(mysqli_num_rows($query)>0) {
                $_SESSION['email']=$email;
                   header('location:home.php');
               }else{
                   echo "<script> alert('Invalid Credentails, Please Try Again'); </script>";
               }
           }
        }
?>