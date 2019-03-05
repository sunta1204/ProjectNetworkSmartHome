<?php
	include "connect.php";
  	session_start();
	
	$stmt = $pdo -> prepare("SELECT * FROM mem WHERE username= ? AND password = ?");
	$stmt -> bindParam(1,$_POST["username"]);
	$stmt -> bindParam(2,$_POST["password"]);
	$stmt -> execute();
	$row = $stmt -> fetch();
	if (!empty($row)) {
		$_SESSION["username"] = $row["username"];
		$_SESSION["password"] = $row["password"];
		header("location: SmartHome.html");	
	}else{
		echo "username หรือ password ไม่ถูกต้อง";
		echo "<a href = 'index.html'>โปรดเข้าสู่ระบบอีกครั้ง</a>";
	}
	
	?>