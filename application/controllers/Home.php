<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login(){
		$username= $this->input->post('username');
        $password= $this->input->post('password');

        $user= $this->db->get_where('user',['username' => $username])->row_array(); 

        if($user){
            if(password_verify($password,$user['password'])){
                $data =[
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
				$this->session->set_flashdata('flash', 'success-BERHASIL MASUK');
				redirect('Dashboard');
            }
            else{
                $this->session->set_flashdata('flash', 'error-KONFIRMASI-PASSWORD SALAH');
                redirect('Home');
            }
		}
		else {
			$this->session->set_flashdata('flash', 'error-KONFIRMASI-USERNAME TIDAK TERDAFTAR');
			redirect('Home');
		}
	}

	public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('flash', 'success-KONFIRMASI-ANDA SUDAH KELUAR DARI APLIKASI');
		redirect('Home');
    }

	

}
