<?php
class MySQL{
	private $conexion;
	private $total_consultas;
	 function __construct($schema="") {

		if (! isset ( $this->conexion )) {
			
			$schema="u131832063_welta";
			//$schema="u801037716_xtc";
			// Create connection
			$this->conexion = new mysqli("185.28.21.241", "u131832063_user", "1234567890", $schema);
			//$this->conexion = new mysqli("localhost", "u131832063_user", "1234567890", $schema);
			//mysql_query("SET NAMES 'utf8'");
			// Check connection
			if ($this->conexion->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
				

		}
	}
	

	
	public function getConexion() {
		return $this->conexion;
	}

	
	public function closeSession(){
		$this->conexion->close();
	}

	
	
	
	
}
?>