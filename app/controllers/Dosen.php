<?php 

/**
 * 
 */
class Dosen extends Controller
{
	public function index(){
		$data['judul'] = "Daftar Dosen ";
		$data['dosen']= $this->model("Dosen_model")->getAllDosen();
		$this->view("templates/header",$data);
		$this->view("dosen/index",$data);
		$this->view("templates/footer");


	}

}













 ?>