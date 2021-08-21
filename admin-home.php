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
    <div class="search-box">
        <input class="search-txt" type="text" name="" placeholder="Type to search...">
        <a href="" class="search-btn">
            <i class="fas fa-search"></i>
        </a>
    </div>
  <div class="info" style="width: 80%; margin-left: 10%;padding-top:10%;">
        <div class="container">
          <div class="row">
            <div class="col" style="">
                <i style="margin-left: 10px;"  class="fas fa-users"></i>
              <div class="right_1">
                <h4 style="margin-left: 65px;">Admin</h4>
                <p>5</p>
              </div>
            </div>
            <div class="col" style="">
              <i style="margin-left: 25px;" class="far fa-file-alt"></i>
                <div class="right_1">
                  <h4 style="margin-left: 45px;">Category</h4>
                  <p>5</p>
                </div>
              </div>
            <div class="col" style="">
              <i style="margin-left: 15px;" class="far fa-newspaper"></i>
                <div class="right_1">
                  <h4 style="margin-left: 65px;">News</h4>
                  <p>5</p>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
</body>

</html>