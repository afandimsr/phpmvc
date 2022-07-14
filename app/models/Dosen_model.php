<?php 

/**
 * 
 */
class Dosen_model
{	
	private $db;
	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllDosen(){
		$this->db->query("SELECT * FROM dosen");
		$this->db->execute();
		return $this->db->resultSet();
	}
}





 ?>