<?php 
$namapemilik = $_POST['namapemilik'];

if($namapemilik == ""){
	header("location:pelayanan.php?namapemilik=kosong");
}else{
	echo "Nama anda adalah". $namapemilik;
}
?>