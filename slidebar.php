<?php 
	   //Khong dang nhap
		if (!isset( $_SESSION['username'])) {
		echo'

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav demo">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?p=home">
            <i class="fas fa-home"></i>
            <span>Trang Chủ</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xemkieuhoa" >
            <i class="fa fa-file-alt"></i>
            <span>Xem Kiểu hoa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=formSearch">
            <i class="fa fa-search"></i>
            <span>Tìm kiếm loại hoa</span></a>
        </li>
       
      </ul>
   
      ';
  }
  if(isset( $_SESSION['username'])){
   
    $username = $_SESSION['username'];
    $sub = "admin";

    // Dang nhap ad min
    if(strlen(strstr($username, $sub)) > 0){
      echo '
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?p=home">
            <i class="fa fa-home"></i>
            <span>Trang chủ</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xemkieuhoa" >
            <i class="fab fa-pagelines"></i>
            <span>Xem Kiểu hoa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=formSearch">
            <i class="fa fa-search"></i>
            <span>Tìm kiếm loại hoa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xemgiaodich_user">
            <i class="fa fa-file-alt"></i>
            <span>Xem đơn của bạn</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=buying">
            <i class="fas fa-shopping-cart"></i>
            <span>Đặt hàng</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xoaGD_user">
            <i class="fas fa-trash"></i>
            <span>Hủy đơn hàng</span></a>
        </li>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="index.php?p=xemgiaodich_admin">
            <i class="fas fa-align-justify"></i>
            <span>Xem toàn bộ đơn hàng</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xoagiaodich_admin">
            <i class="fa fa-file-alt"></i>
            <span>Xóa đơn khách hàng</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=formInsert">
            <i class="fa fa-plus-circle"></i>
            <span>Thêm loại hoa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=Update">
            <i class="fa fa-edit"></i>
            <span>Cập nhật loại hoa</span></a>
        </li>

        
      </ul>
      ';
    }
  // Dang nhap khach hang
    else {
      echo '
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?p=home">
            <i class="fa fa-home"></i>
            <span>Trang chủ</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xemkieuhoa" >
            <i class="fab fa-pagelines"></i>
            <span>Xem Kiểu hoa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=formSearch">
            <i class="fa fa-search"></i>
            <span>Tìm kiếm loại hoa</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="index.php?p=buying">
            <i class="fas fa-shopping-cart"></i>
            <span>Đặt hàng</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xemgiaodich_user">
            <i class="fa fa-file-alt"></i>
            <span>Xem đơn của bạn</span></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=xoaGD_user">
            <i class="fas fa-trash"></i>
            <span>Hủy đơn hàng</span></a>
        </li>
        
      </ul>';
    }
    }
    
  

	?>