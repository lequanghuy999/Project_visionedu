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
    <p style="text-align:center; padding-top:140px;" class="h1">QUẢN LÝ TRANG WEB VISIONEDU.VN</p><hr style="margin-top:61px;">
    <p style="margin-left:100px;width:85%;text-align:center; padding-top:50px;" class="h4">VisionEdu là đơn vị có nhiều năm kinh nghiệm họa động trong lĩnh vực tư vấn du học. VisionEdu có nhiều kinh nghiệm và sự hiểu biết sâu rộng về hệ thống giáo dục, chính sách visa, nhu cầu nhân lực của các quốc gia phát triển như Nhật, Hàn, Trung, Đài Loan... so với Việt Nam. Bên cạnh đó, VisionEdu còn có sự thấu hiểu về nhu cầu và nguyện vọng của từng học sinh cũng như quý phụ huynh. Nên khi bắt đầu tư vấn, VisionEdu có thể đưa ra các lựa chọn chính xác và hoàn hảo khi lựa chọn trường, chương trình học và quốc gia du học. Giúp tối ưu hóa thời gian du học, chi phí du học và đạt được thành công tuyệt đối sau quá trình du học như nguyện vòng ban đầu của học sinh và quý phụ huynh.</p>
</div>