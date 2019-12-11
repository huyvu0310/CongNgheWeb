<?php 
	session_start();
	$username = $_SESSION['username'];
	$makieuhoa = $_GET['makieuhoa'];
	$maloaihoa = $_GET['maloaihoa'];
	$mota = $_GET['mota'];
	$diachi = $_GET['diachi'];	
	$ngaygui = $_GET['ngaygui'];
	$loichuc = $_GET['loichuc'];	
	$gia = $_GET['gia'];

	$link = mysqli_connect("localhost","root","","dulieu") or die("error");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql = "INSERT INTO giaodich(iduser, idkieuhoa,idloaihoa,diachi,ngaygui,loichuc,price) values ('".$username."','".$makieuhoa."','".$maloaihoa."','".$diachi."','".$ngaygui."','".$loichuc."',$gia) ";
	$result = mysqli_query($link,$sql);
	
	header('Location:index.php?p=xemgiaodich_user');

	 ?>