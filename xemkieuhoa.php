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
	$sql = "select * from kieuhoa";
	$result = mysqli_query($link,$sql);
?>
<h1>DANH SÁCH CÁC KIỂU HOA</h1>
<table class="table table-hover">
  	<thead>
  		<tr><th>Mã kiểu hoa</th><th>Kiểu hoa</th><th>Mô tả kiểu hoa</th><th>Xem từng loại hoa</th></tr>
  	</thead>
  	<tbody>
  	<?php 
	
		while ($row = mysqli_fetch_array($result)) {
		$makieuhoa = $row['idkieuhoa'];
		$tenkieuhoa = $row['kieuhoa'];
		$mota = $row['mota'];
		$xemKH = "<a href = 'index.php?p=xemloaihoa_kieuhoa&id=$makieuhoa'>xem</a>";
		echo "<tr>
			<td>$makieuhoa</td> <td>$tenkieuhoa</td><td>$mota</td><td>$xemKH</td>
		</tr>";
	}
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($link);
  	
	
?>
</tbody>
</table>
</body>