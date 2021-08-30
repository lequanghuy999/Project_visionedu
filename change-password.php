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
<form class="search-form" action="change-p.php" method="post" style="width: 70%; margin-left: 15%;padding-top: 15%;">
     	<p class="h1">Change Password</p>
        <hr>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<p class="h5">Old Password</p>
     	<input style="border: none; height:30px; border-bottom:2px solid black; width:300px;" type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<p class="h5">New Password</p>
     	<input style="border: none; height:30px; border-bottom:2px solid black; width:300px;" type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>
		
     	<p class="h5">Confirm New Password</p>
     	<input style="border: none; height:30px; border-bottom:2px solid black; width:300px;" type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button style="border: none; margin-top: 15px; height:30px;" type="submit">CHANGE</button>
          <a style="margin-left:160px; text-decoration:none;" href="admin-home.php" class="ca">Exit!</a>
     </form>
</div>

    


