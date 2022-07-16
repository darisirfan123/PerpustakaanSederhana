<?php

    include "controller/controller.php";

    $cl = new controller();

    if (isset($_GET["buat"])) {
		$cl->viewRegister(); 
	} else {
        $cl->viewLogin();
    }

?>