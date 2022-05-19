<?php
add_action(	"init","codigo_inicial");

function codigo_inicial() {

	 register_post_type("empleos",[
	  "label" => "Empleos",
	  "public"=> true
	]);
}


?>