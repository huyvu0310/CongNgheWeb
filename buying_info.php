 <?php 

 $username = $_SESSION['username'];
 $idloaihoa = $_GET['idloaihoa'];
 $idkieuhoa = $_GET['idkieuhoa'];
 $mota = $_GET['mota'];
 $gia = $_GET['gia'];

   echo "
	<form action = 'xulybuying.php' 
					class='d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0' method ='get'>
			<label style='color: red'> Mã Kiểu hoa: </label>
			<input type = 'text' class='form-control' aria-label='Search' aria-describedby='basic-addon2' value = '$idloaihoa' name = 'makieuhoa'><br><br>
			<label style='color: red'>Mã loại hoa: </label>
			<input type = 'text' class='form-control' aria-label='Search' aria-describedby='basic-addon2' value = '$idkieuhoa' 
							name = 'maloaihoa'><br><br>
			<label style='color: red'>Mô tả loại hoa </label>
			<input type = 'text' class='form-control' aria-label='Search' aria-describedby='basic-addon2' value = '$mota' name = 'mota'><br><br>
			<label style='color: red'>Giá</label>
			<input type = 'text' class='form-control' aria-label='Search' aria-describedby='basic-addon2' value = '$gia' name = 'gia'><br><br> 
			<label style='color: red'>Địa chỉ</label>
			<input type = 'text' class='form-control' aria-describedby='basic-addon2' value = '' name = 'diachi'><br><br> 
			<label style='color: red'>Lời chúc</label>
			<input type = 'text' class='form-control' aria-describedby='basic-addon2' value = '' name = 'loichuc'><br><br>			
			<label style='color: red'>Ngày gửi</label>
			<input type = 'text' class='form-control' aria-describedby='basic-addon2' value = '' name = 'ngaygui'><br><br>			


			<input class='btn btn-danger' type = 'submit' value = 'OK' name = 'submit' >
		</form>'";	
 ?>
