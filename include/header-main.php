<?php
    session_start();
?>

<?php
    include('db/connection.php');

        if(isset($_POST['submit'])) {
           $email=$_POST['email'];
           $password=$_POST['password'];
           $query=mysqli_query($conn,"select * from admin_login where email='$email' and password='$password' ");

           if($query) {
               if(mysqli_num_rows($query)>0) {
               $_SESSION['email']=$email;
               
                   header('location:admin-home.php');
               }else{
                   echo "<script> alert('Invalid Credentails, Please Try Again'); </script>";
               }
           }
        }
?>
<!--=========== header ================-->
<div id="header">
      <div class="logo">
        <img src="images/logo.png" alt="">
      </div>

      <div class="top-header">
        <div class="header-contact">
          <img src="images/icon-phone.png" alt="">
          <p class="h6">Hotline: <span>0355404685</span></p>
          <img src="images/icon-phone.png" alt="">
          <p class="h6">Email: <span>info@visionedu.vn</span></p>
        </div>

        <div class="header-top-nav" style="margin-right:25px;">
          <ul style="padding-top:5px;">
            <li><a href="">Giới Thiệu <span>|</span> </a></li>
            <li><a href="">Tin tức sự kiện <span>|</span></a></li>
            <li><a href="">Liên hệ <span>|</span></a></li>
            <li><a href="">Tuyển dụng</a></li>
          </ul>
        </div>
        <!--================= login ========================-->
        
        <!-- ================login end =====================-->
      </div>

      <nav class="bottom-header">
        <ul>
          <li>
             <a href="#">Du học các nước
             <i class="fas fa-caret-down"></i>
             </a>
             <ul>
                <li><a href="#">Du Học Nhật Bản</a></li>
                <li><a href="#">Du Học Hàn Quốc</a></li>
                <li><a href="#">Du Học CHLB Đức</a></li>
                <li><a href="#">Du Học Đài Loan</a></li>
                <li><a href="#">Du Học Trung Quốc</a></li>
             </ul>
          </li>
          <li><a href="#">Tin tuyển sinh</a></li>
          <li>
            <a href="#">Hội thảo du học
            <i class="fas fa-caret-down"></i>
            </a>
            <ul>
               <li><a href="#">Du Học Nhật Bản</a></li>
               <li><a href="#">Du Học Đài Loan</a></li>
               <li><a href="#">Du Học Trung Quốc</a></li>
               <li><a href="#">Du Học Hàn Quốc</a></li>
               <li><a href="#">Du Học CHLB Đức</a></li>
            </ul>
         </li>
          <li>
             <a href="#">Cuộc sống du học
             <i class="fas fa-caret-down"></i>
             </a>
             <ul>
                <li><a href="#">Cuộc Sống Ở Nhật</a></li>
                <li><a href="#">Cuộc Sống Ở Hàn</a></li>
                <li><a href="#">Cuộc Sống Ở CHLB Đức</a></li>
                <li><a href="#">Cuộc Sống Ở Trung Quốc</a></li>
                <li><a href="#">Cuộc Sống Ở Đài Loan</a></li>
             </ul>
          </li>
          <li>
            <a href="#">Hỏi đáp - tư vấn
            <i class="fas fa-caret-down"></i>
            </a>
            <ul>
               <li><a href="#">Hỏi Đáp Du Học Nhật Bản</a></li>
               <li><a href="#">Hỏi Đáp Du Học Hàn Quốc</a></li>
               <li><a href="#">Hỏi Đáp Du Học CHLB Đức</a></li>
               <li><a href="#">Hỏi Đáp Du Học Trung Quốc</a></li>
               <li><a href="#">Hỏi Đáp Du Học Đài Loan</a></li>
            </ul>
         </li>
          <li><a href="#">Đào tạo ngoại ngữ</a></li>
          <li><a href="#"><i class="fas fa-search"></i></a></li>
          <!--============ Button trigger modal===================== -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span>Admin Login</span></button>

         <!-- Modal -->
         <div style="color:#fff;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div style="background: linear-gradient(to right, #84B2FF, #004e98);" class="modal-header">
                  <p style="Color:#fff;" class="h3 modal-title" id="exampleModalLabel">Login for Admin</p>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="background-color:#84B2FF;">
                  <div class="container">
                     <form action="index.php" method="post">
                        <div class="mb-3">
                              <label for="email">Email address</label>
                              <input style="border-bottom: 1px solid red;border: none;" type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                              <label for="pwd">Password</label>
                              <input type="password" class="form-control" name="password" id="pwd">
                        </div>
                        <input style="background: linear-gradient(to right, #84B2FF, #004e9a); width:150px;" type="submit" name="submit" class="btn btn-primary" value="login">
                     </form>
                  </div>
                  </div>
                  <div class="modal-footer" style="background: linear-gradient(to right, #004e9a, #84B2FF);">
                  <button style="background: linear-gradient(to right, #004e9a, #84B2FF);" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- =================end button======================== -->
       </ul>
      </div>


