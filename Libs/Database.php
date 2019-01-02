<?php 
class Database{
	private $se = SERVER;
	private $us = USER;
	private $co = PASS;
	private $bd = DB;


	public function connect(){
		/* PREPARACION DE LA CONEXION */
		$mysqli = new mysqli($this->se, $this->us, $this->co, $this->bd);
		/* ESTABLECIMIENTO DE LA CONEXION */
		if ($mysqli->connect_errno) {
			printf("Error en la conexion: %s\n", $mysqli->connect_error);
			exit();
		}else{
			echo "Estás conectado";
		}
		$mysqli->set_charset("utf8");
	}
}


?>