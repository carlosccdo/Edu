<?php 
class testModel extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function insert(){
		$this->db->connect();
	}

}

?>