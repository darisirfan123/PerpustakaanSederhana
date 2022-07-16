<?php

    include "controller/controller.php";

    $cl3 = new controller();

   	if (isset($_GET["pinjam"])) {
		$id = $_GET["id"];
		$jml = $_GET["jml"];
		$cl3->viewPeminjaman($id, $jml); 
	} else if (isset($_GET["lengkap"])) {
		$id = $_GET["id"];
		$cl3->viewLengkap($id); 
	} else if (isset($_GET["tambahPinjam"])) {
		$id = $_GET["id"];
		$cl3->tambahPinjam($id); 
	} else {
		$cl3->viewKatalog(); 
	}


?>