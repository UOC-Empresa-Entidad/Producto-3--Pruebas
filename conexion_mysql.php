<?php

$conectar = new mysqli ("localhost","root","", "p8");
			if ($conectar->connect_errno) {
    			trigger_error("Fallo en la conexión.");
			}
			$conectar->set_charset('utf8');


?>