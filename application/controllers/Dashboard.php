<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');       
	}

	
	public function index()
	{
		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('dashboard/main.php');
		$this->load->view('partials/footer.php');
	}

	public function user(){
		$data = [
			'tampil'=>$this->M_data->tampil_data('user')->result()
		];
		

		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('user/main.php',$data);
		$this->load->view('partials/footer.php');
	}

	public function adduser(){
		$this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
			'min_length' => 'Password Terlalu Pendek !'
		]);
		    
		if($this->form_validation->run()==false){
			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('user/add.php');
			$this->load->view('partials/footer.php');
		}
		else{
			$data=[
				'username'=> htmlspecialchars($this->input->post('username')),
				'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'confirm'=> htmlspecialchars($this->input->post('password')),
				'created_date'=> date('Y-m-d')
			];

			$this->M_data->input_data('user',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/user');
		}
	}

	public function hapususer($id){
			$where=array('id_user' =>$id);
			$this->M_data->hapus_data($where,'user');
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
			redirect('Dashboard/user');
	}

	public function edituser($id){
		
			$where=array('id_user' =>$id);
			$data['edit']=$this->M_data->edit_data($where,'user')->result();

			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('user/edit.php', $data);
			$this->load->view('partials/footer.php');
	}
	

	public function update(){
		$id=$this->input->post('id');
		
		$data=[
			'username'=> htmlspecialchars($this->input->post('username')),
			'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'confirm'=> htmlspecialchars($this->input->post('password')),
			'created_date'=> date('Y-m-d')
		];
			
		$where=array('id_user' =>$id);
		$this->M_data->update_data($where,$data,'user');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIUBAH');
		redirect('Dashboard/user');
	}

	public function opd(){
		$data = [
			'tampil'=>$this->M_data->tampil_data('opd')->result()
		];
		

		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('opd/main.php',$data);
		$this->load->view('partials/footer.php');
	}

	public function addopd(){
		$this->form_validation->set_rules('opd','opd','required|trim');
		
		    
		if($this->form_validation->run()==false){
			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('opd/add.php');
			$this->load->view('partials/footer.php');
		}
		else{
			$data=[
				'nama_opd'=> htmlspecialchars($this->input->post('opd')),
			];

			$this->M_data->input_data('opd',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/opd');
		}
	}

	public function hapusopd($id){
			$where=array('id_opd' =>$id);
			$this->M_data->hapus_data($where,'opd');
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
			redirect('Dashboard/opd');
	}

	public function editopd($id){
		
			$where=array('id_opd' =>$id);
			$data['edit']=$this->M_data->edit_data($where,'opd')->result();

			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('opd/edit.php', $data);
			$this->load->view('partials/footer.php');
	}
	

	public function updateopd(){
		$id=$this->input->post('id');
		
		$data=[
			'nama_opd'=> htmlspecialchars($this->input->post('opd')),
			
		];
			
		$where=array('id_opd' =>$id);
		$this->M_data->update_data($where,$data,'opd');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIUBAH');
		redirect('Dashboard/opd');
	}

	public function sumber(){
		$data = [
			'tampil'=>$this->M_data->tampil_data('sumber')->result()
		];
		

		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('sumber/main.php',$data);
		$this->load->view('partials/footer.php');
	}

	public function addsumber(){
		$this->form_validation->set_rules('nama','nama','required|trim');
		
		    
		if($this->form_validation->run()==false){
			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('sumber/add.php');
			$this->load->view('partials/footer.php');
		}
		else{
			$data=[
				'nama_sumber'=> htmlspecialchars($this->input->post('nama')),
			];

			$this->M_data->input_data('sumber',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/sumber');
		}
	}

	public function hapussumber($id){
			$where=array('id_sumber' =>$id);
			$this->M_data->hapus_data($where,'sumber');
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
			redirect('Dashboard/sumber');
	}

	public function editsumber($id){
		
			$where=array('id_sumber' =>$id);
			$data['edit']=$this->M_data->edit_data($where,'sumber')->result();

			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('sumber/edit.php', $data);
			$this->load->view('partials/footer.php');
	}

	public function updatesumber(){
		$id=$this->input->post('id');
		
		$data=[
			'nama_sumber'=> htmlspecialchars($this->input->post('nama')),
			
		];
			
		$where=array('id_sumber' =>$id);
		$this->M_data->update_data($where,$data,'sumber');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIUBAH');
		redirect('Dashboard/sumber');
	}


	public function kas(){
		$data = [
			'tampil'=>$this->M_data->viewkas()
		];
		

		$this->load->view('partials/header.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/sidebar.php');
		$this->load->view('dashboard/kas.php',$data);
		$this->load->view('partials/footer.php');
	}

	public function addkas(){
		$this->form_validation->set_rules('b','Pagu','required|trim');
		$this->form_validation->set_rules('c','RKUD','required|trim');

		if($this->form_validation->run()==false){
			$data=[
				'sumber'=>$this->M_data->tampil_data('sumber')->result()
			];
			$this->load->view('partials/header.php');
			$this->load->view('partials/navbar.php');
			$this->load->view('partials/sidebar.php');
			$this->load->view('dashboard/addkas.php',$data);
			$this->load->view('partials/footer.php');
		}else {
			$data=[
				'id_sumber'=> htmlspecialchars($this->input->post('a')),
				'pagu'=> htmlspecialchars($this->input->post('b')),
				'rkud'=> htmlspecialchars($this->input->post('c'))
			];

			$this->M_data->input_data('kas',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/kas');
		}
	}

}