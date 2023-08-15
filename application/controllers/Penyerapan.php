<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyerapan extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');       
	}

    public function index()
	{
		$data = [
			'tampil'=>$this->M_data->tampil_data('opd')->result()
		];

		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('penyerapan/main.php',$data);
		$this->load->view('partials/footer.php');
	}

	public function detail($id){
		$data=[
			'detail'=>$this->M_data->penyerapan($id),
			'opd'=>$this->M_data->getbyid($id)
		];
	
		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('penyerapan/detail.php',$data);
		$this->load->view('partials/footer.php');
	}

   


}