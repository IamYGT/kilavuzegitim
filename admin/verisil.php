<?php
error_reporting(1);


$name=$_GET["name"];
$current=$_GET["current"];
$subpage=$_GET["subpage"];
$cat_id=$_GET["cat_id"];
$action=$_GET["action"];
$id=$_GET["id"];
$total = $current."&subpage=".$subpage."&cat_id=".$cat_id."&action=".$action."&id=".$id;

$sil=$_GET["name"];

$veritabani = "relassa1_site"; //veritabanı adı
$host="localhost";
$hesap="relassa1_site"; //kullanıcı adı
$sifre="EmpeRiaN2"; //sifre
$baglan;
$bilgial = array();

				try{

							$baglan = new PDO("mysql:host=$host;dbname=$veritabani",$hesap,$sifre);
							$baglan->exec("SET NAMES UTF8 COLLATE utf8_unicode_ci");
				}catch(PDOException $e){
							echo $e->getMessage();
				}

		
	    $sql = "UPDATE products_items SET ".$sil."='' WHERE id=".$id."";
	    $stmt = $baglan->prepare($sql);
		$stmt->execute();

header('Location:'.$total); exit();
?>