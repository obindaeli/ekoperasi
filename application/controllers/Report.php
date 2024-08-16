<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');       
	}

    public function anggaran_all(){
        $this->load->library('Dompdf_gen');
        
        $data = [
            'cetak' => $this->M_data->viewanggaran()
        ];

        $this->load->view('Report/anggaran_all',$data);

        $tgl=date('Y-m-d');
        $paper_size='Legal';
        $orientation="landscape";
        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);
        
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("simpangbsd_$tgl.pdf", array('attachment'=>0));
    }

    public function anggaran_opd($id){
        $this->load->library('Dompdf_gen');
        
        $data = [
            'cetak' => $this->M_data->detailanggaran($id)
        ];

        $this->load->view('Report/anggaran_opd',$data);

        $tgl=date('Y-m-d');
        $paper_size='Folio';
        $orientation="landscape";
        $html=$this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);
        
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("simpangbsd_opd_$tgl.pdf", array('attachment'=>0));

    }

    public function pengajuan(){

    }
}