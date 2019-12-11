<?php
	$makieuhoa = $_GET['makieuhoa'];
	$maloaihoa = $_GET['maloaihoa'];
	$mota = $_GET['mota'];
	echo $maloaihoa;
	$gia = $_GET['gia'];
	$link = mysqli_connect("localhost","root","","dulieu") or die("error");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql = "update loaihoa SET mota = '".$mota."',price = '".$gia."' WHERE idloaihoa = '".$maloaihoa."'";
	$result = mysqli_query($link,$sql);
	echo "dsfsdfsdf";
	header('Location:index.php?p=complete');
?>