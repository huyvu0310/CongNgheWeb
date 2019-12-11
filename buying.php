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
	mysqli_query($link,"SET NAMES 'utf8'");
	
	$sql = "select * from loaihoa ";
	$result = mysqli_query($link,$sql);
?>
	<h1>DANH SÁCH CÁC LOẠI HOA</h1>
<table class="table table-hover">
  	<thead>
  		<tr>
  			<th>Mã kiểu hoa</th>
  			<th>Mã loại hoa</th>
  			<th>Mô tả loại hoa</th>
  			<th>Giá (VNĐ)</th>
  			<th>Mua</th>
  		</tr>
  	</thead>
  	<tbody>
  		<?php 
  		while ($row = mysqli_fetch_array($result)) {
		$makieuhoa= $row['idkieuhoa'];
		$maloaihoa = $row['idloaihoa'];
		$mota = $row['mota'];
		$gia = $row['price'];
		$mua = "<a href = 'index.php?p=buying_info&idloaihoa=$maloaihoa
					&idkieuhoa=$makieuhoa
					&mota=$mota
					&gia=$gia'>Mua</a>";
		echo "<tr>
			<td>$makieuhoa</td> <td>$maloaihoa</td><td>$mota</td><td>$gia</td><td>$mua</td>
		</tr>";
	}
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($link);
	
?>