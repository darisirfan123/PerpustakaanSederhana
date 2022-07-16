<?php

    include "controller/controller.php";

    $cl3 = new controller();

    if (isset($_GET["kembali"])) {
		// $cl3->kembali(); 
	} else {
		$cl3->viewKembali(); 
	}
	
?>