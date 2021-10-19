<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kabupaten extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Kab_model', 'km');
		
	}

	public function index()
	{
		error_reporting(0);
		$cari = $_GET['keyword'];
		if ($cari != null) {
			$data['data_kab'] = $this->km->search($cari)->result();
		}else{
			$w = array ('kabupaten.id_provinsi');
			$data['data_kab'] = $this->km->getDataId('kabupaten', $w)->result();
		}
		$data['data_prov'] = $this->km->getData('provinsi')->result();
		
		$this->load->view('template/header');
		$this->load->view('kabupaten', $data);
	}
    public function tambah()
	{
		$w = array ('kabupaten.id_provinsi');
		$data['data_kab'] = $this->km->getDataId('kabupaten', $w)->result();
		$data['data_prov'] = $this->km->getData('provinsi')->result();
		$this->load->view('template/header');
		$this->load->view('Tambah_kab',$data);
	}
    
    public function simpan()
	{
        $ins = array(
            'nama_kabupaten' => $this->input->post('nama_kabupaten'),
            'jml_penduduk' => $this->input->post('jml_penduduk'),
			'id_provinsi' => $this->input->post('id_provinsi')
        );
        $this->km->ins('kabupaten', $ins);
        redirect('index.php/Kabupaten','refresh');
	}
    public function hapus()
    {
		$w = array('id_kabupaten' => $this->uri->segment(3));
		$this->km->del('kabupaten', $w);
		redirect('index.php/Kabupaten','refresh');
    }

}

/* End of file Peminjaman.php */