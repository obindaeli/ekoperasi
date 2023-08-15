<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggaran extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');       
	}

    public function index()
	{
		$data=[
			'tampil' => $this->M_data->viewanggaran()
		];
		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('anggaran/main.php',$data);
		$this->load->view('partials/footer.php');
	}

   

	public function tambahanggaran(){
		$this->form_validation->set_rules('c','c','required|trim');

		if($this->form_validation->run()==false){
			$data = [
				'opd'=>$this->M_data->tampil_data('opd')->result(),
				'sumber'=> $this->M_data->tampil_data('sumber')->result()
			];
			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('anggaran/add.php',$data);
			$this->load->view('partials/footer.php');
		}else {
			$data=[
				'id_opd'=> htmlspecialchars($this->input->post('a')),
				'id_sumber'=> htmlspecialchars($this->input->post('b')),
				'jumlah'=> htmlspecialchars($this->input->post('c'))
			];

			$this->M_data->input_data('pagu',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Anggaran');
		}
		
	}

	public function detailanggaran($id){
		$data=[
			'detail' => $this->M_data->detailanggaran($id),
			'opd'=>$this->M_data->getbyid($id)
		];
		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('anggaran/detail.php',$data);
		$this->load->view('partials/footer.php');
	}

	public function pengajuan(){
		$data=[
			'tampil' => $this->M_data->viewpengajuan()
		];
		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('pengajuan/main.php',$data);
		$this->load->view('partials/footer.php');
	}


}