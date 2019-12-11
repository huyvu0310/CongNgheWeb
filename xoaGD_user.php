<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	$link = mysqli_connect("localhost","root","","dulieu") or die("error");
	$name = $_SESSION['username'];
	
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql = "select * from giaodich where iduser = '".$name."'";
	$result = mysqli_query($link,$sql);
?>
<h1>ĐƠN HÀNG CỦA BẠN</h1>
<table class="table table-hover">
  	<thead>
  		<tr>
  			<th>Mã giao dịch</th>
			<th>Mã khách hàng</th>
			<th>Mã kiểu hoa</th>
			<th>Mã loại hoa</th>
			<th>Địa chỉ người nhận</th>
			<th>Ngày gửi</th>
			<th>Lời chúc</th>
			<th>Giá (VNĐ)</th>
			<th>HỦY ĐƠN</th>
			</tr>
  	</thead>
	
<?php 
while ($row = mysqli_fetch_array($result)) {
		$magiaodich = $row['idgiaodich'];
		$makhachhang =  $row['iduser'];
		$makieuhoa = $row['idkieuhoa'];
		$maloaihoa = $row['idloaihoa'];
		$diachi = $row['diachi'];
		$ngaygui = $row['ngaygui'];
		$loichuc = $row['loichuc'];
		$price = $row['price'];
		$huy = "<a href = 'index.php?p=xulixoaGD&id=$magiaodich'  >Hủy</a>
		";
		echo "<tr>
			<td>$magiaodich</td>
			<td>$makhachhang</td>
			<td>$makieuhoa</td>
			<td>$maloaihoa</td>
			<td>$diachi</td>
			<td>$ngaygui</td>
			<td>$loichuc</td>
			<td>$price</td>
			<td>$huy</td>
		</tr>";
	}

	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($link);

?>
</table>
</body>

