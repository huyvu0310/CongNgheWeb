<?php
	$makieuhoa = $_GET['makieuhoa'];
	$maloaihoa = $_GET['maloaihoa'];
	$mota = $_GET['mota'];
	$gia = $_GET['gia'];
	$link = mysqli_connect("localhost","root","","dulieu") or die("error");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql = "insert into loaihoa(idkieuhoa,idloaihoa,mota,price) values('".$makieuhoa."','".$maloaihoa."','".$mota."','".$gia."')";
	$result = mysqli_query($link,$sql);

	header('Location:index.php?p=complete');
?>
