<?php
    session_start();

    if($_SESSION['email']==true) {

    }else {
      header('location:index.php');
      $page='home';
    }
    include('include/header1.php');
?>
<div class="content">
  
    <form class="search-box" action="search.php" method="post">
        <input class="search-txt" type="text" name="search" placeholder="Type to search...">
        <button class="btn search-btn"><i class="fas fa-search"></i></button>
    </form>
  <div class="info" style="width: 80%; margin-left: 10%;padding-top:10%;">
        <div class="container">
          <div class="row">
            <div class="col" style="">
                <i style="margin-left: 10px;"  class="fas fa-users"></i>
              <div class="right_1">
                <h4 style="margin-left: 65px;">Admin</h4>
                <p><?php
                  
                      $sql="SELECT id FROM admin_login";
                      if ($result=mysqli_query($conn,$sql))
                      {
                      // Return the number of rows in result set
                      $rowcount=mysqli_num_rows($result);
                      printf($rowcount);
                      // Free result set
                      mysqli_free_result($result);
                      }
                    ?>
                </p>
              </div>
            </div>
            <div class="col" style="">
              <i style="margin-left: 25px;" class="far fa-file-alt"></i>
                <div class="right_1">
                  <h4 style="margin-left: 45px;">Category</h4>
                  <p><?php
                      $sql="SELECT id FROM category";
                      if ($result=mysqli_query($conn,$sql))
                      {
                      // Return the number of rows in result set
                      $rowcount=mysqli_num_rows($result);
                      printf($rowcount);
                      // Free result set
                      mysqli_free_result($result);
                      }
                      ?> 
                  </p>
                </div>
              </div>
            <div class="col" style="">
              <i style="margin-left: 15px;" class="far fa-newspaper"></i>
                <div class="right_1">
                  <h4 style="margin-left: 65px;">News</h4>
                  <p>
                    <?php
                    $sql="SELECT id FROM news";
                    if ($result=mysqli_query($conn,$sql))
                    {
                    // Return the number of rows in result set
                    $rowcount=mysqli_num_rows($result);
                    printf($rowcount);
                    // Free result set
                    mysqli_free_result($result);
                    }
                    mysqli_close($conn);
                    ?>
                  </p>
                </div>
              </div>
          </div>
      </div>
  </div>
  <hr style="margin-top:43px;">

