<?php
try {
	$pdo = new PDO("mysql:host=localhost;dbname=member;charset=utf8", "sunta1204","Suriyapong0860896847");
} catch (PDOException $e) {
	echo "เกิดข้อผิดพลาด : ".$e->getMessage();
}
?>