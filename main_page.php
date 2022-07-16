<?php

    include "controller/controller.php";

    $cl3 = new controller();

    if (isset($_GET["pengaturan"])) {
		$cl3->viewPengaturan(); 
	} else{
        $cl3->viewMain();
    }

?>