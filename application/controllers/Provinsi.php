<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Prov_model', 'pm');
		
	}

	public function index()
	{
        
        $data['data_prov'] = $this->pm->get('provinsi')->result();
		$this->load->view('template/header');
		$this->load->view('index', $data);
	}
    public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('Tambah_prov');
	}
    
    public function simpan()
	{
        $ins = array(
            'nama_prov' => $this->input->post('nama_prov')
        );
        $this->pm->ins('provinsi', $ins);
        redirect('index.php/Provinsi','refresh');
	}
    public function simpan_edit()
	{
        
        $w = array('id_provinsi' => $this->uri->segment(3));
		
			$ins = array(
				'nama_prov' => $this->input->post('nama_prov')
			);
		
		$this->pm->updData('provinsi', $ins, $w);
		redirect('index.php/Provinsi','refresh');
	}
    public function hapus()
    {
		$w = array('id_provinsi' => $this->uri->segment(3));
		$this->pm->del('provinsi', $w);
		redirect('index.php/Provinsi','refresh');
    }
   
    
    public function halaman_edit($id)
	{
        $this->pm->get('provinsi', $id);
		$this->load->view('template/header');
		$this->load->view('Edit_prov');
	}
}

/* End of file Peminjaman.php */