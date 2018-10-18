<?php 
try {
	$db=new PDO("mysql:host=localhost;dbname=odyometri;charset=utf8",'root','297836887755');
	//echo "BAĞLANTI BAŞARILI";
} catch (PDOException $e) {
	echo $e->getMessage();
}


 ?>