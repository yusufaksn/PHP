<?php 
include'baglan.php';

if (isset($_GET['odyometri_id']))
 {
	$odyosil=$db->prepare("DELETE FROM odyometri where 
		odyometri_id=:id");
	$sil=$odyosil->execute(array(
		'id'=>$_GET['odyometri_id']
		));

	if ($sil) 
	{
		header('Location:../production/index.php?durum=ok');
	}
}


if (isset($_POST['GUNCELLE'])) 
{	
   $odyomet_id=$_POST['odyometri_id'];
	$gunc=$db->prepare("UPDATE odyometri  set
		odyometri_ad=:odyometri_ad,
		odyometri_kanaat=:odyometri_kanaat,
		sol250hz=:sol250hz,
		sol500hz=:sol500hz,
		sol1khz=:sol1khz,
		sol2khz=:sol2khz,
		sol3khz=:sol3khz,
		sol4khz=:sol4khz,
		sol6khz=:sol6khz,
		sol8khz=:sol8khz,
		sag250hz=:sag250hz,
		sag500hz=:sag500hz,
		sag1khz=:sag1khz,
		sag2khz=:sag2khz,
		sag3khz=:sag3khz,
		sag4khz=:sag4khz,
		sag6khz=:sag6khz,
		sag8khz=:sag8khz
		where odyometri_id={$_POST['odyometri_id']}
		");
	$update=$gunc->execute(array(
		'odyometri_ad'=>$_POST['odyometri_ad'],
		'odyometri_kanaat'=>$_POST['odyometri_kanaat'],
		'sol250hz'=>$_POST['sol250hz'],
		'sol500hz'=>$_POST['sol500hz'],
		'sol1khz'=>$_POST['sol1khz'],
		'sol2khz'=>$_POST['sol2khz'],
		'sol3khz'=>$_POST['sol3khz'],
		'sol4khz'=>$_POST['sol4khz'],
		'sol6khz'=>$_POST['sol6khz'],
		'sol8khz'=>$_POST['sol8khz'],
		'sag250hz'=>$_POST['sag250hz'],
		'sag500hz'=>$_POST['sag500hz'],
		'sag1khz'=>$_POST['sag1khz'],
		'sag2khz'=>$_POST['sag2khz'],
		'sag3khz'=>$_POST['sag3khz'],
		'sag4khz'=>$_POST['sag4khz'],
		'sag6khz'=>$_POST['sag6khz'],
		'sag8khz'=>$_POST['sag8khz']

		));
	if ($update) 
	{
		header('Location:../production/odyo-detay.php');
	}else
	{
		header('Location:../production/index.php');
	}
}

if (isset($_POST['EKLE'])) 
{	
   
	$gunc=$db->prepare("INSERT INTO  odyometri set
		odyometri_ad=:odyometri_ad,
		odyometri_kanaat=:odyometri_kanaat,
		sol250hz=:sol250hz,
		sol500hz=:sol500hz,
		sol1khz=:sol1khz,
		sol2khz=:sol2khz,
		sol3khz=:sol3khz,
		sol4khz=:sol4khz,
		sol6khz=:sol6khz,
		sol8khz=:sol8khz,
		sag250hz=:sag250hz,
		sag500hz=:sag500hz,
		sag1khz=:sag1khz,
		sag2khz=:sag2khz,
		sag3khz=:sag3khz,
		sag4khz=:sag4khz,
		sag6khz=:sag6khz,
		sag8khz=:sag8khz
		
		");
	$update=$gunc->execute(array(
		'odyometri_ad'=>$_POST['odyometri_ad'],
		'odyometri_kanaat'=>$_POST['odyometri_kanaat'],
		'sol250hz'=>$_POST['sol250hz'],
		'sol500hz'=>$_POST['sol500hz'],
		'sol1khz'=>$_POST['sol1khz'],
		'sol2khz'=>$_POST['sol2khz'],
		'sol3khz'=>$_POST['sol3khz'],
		'sol4khz'=>$_POST['sol4khz'],
		'sol6khz'=>$_POST['sol6khz'],
		'sol8khz'=>$_POST['sol8khz'],
		'sag250hz'=>$_POST['sag250hz'],
		'sag500hz'=>$_POST['sag500hz'],
		'sag1khz'=>$_POST['sag1khz'],
		'sag2khz'=>$_POST['sag2khz'],
		'sag3khz'=>$_POST['sag3khz'],
		'sag4khz'=>$_POST['sag4khz'],
		'sag6khz'=>$_POST['sag6khz'],
		'sag8khz'=>$_POST['sag8khz']

		));
	if ($update) 
	{
		header('Location:../production/index.php');
	}else
	{
		header('Location:../production/index.php');
	}
	
}


?>