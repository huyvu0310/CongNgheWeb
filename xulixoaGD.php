<?php
	$link = mysqli_connect("localhost","root","","dulieu") or die("error");
	mysqli_query($link,"SET NAMES 'utf8'");
	$id = $_GET['id'];
	
	$sql = "delete from giaodich where idgiaodich =$id";
	$result = mysqli_query($link,$sql);

	echo '<h1>Bạn đã xóa thành công</h1>';

?>
