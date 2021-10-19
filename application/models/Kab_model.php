<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kab_model extends CI_Model 
{
	public function getData($t)
	{
		return $this->db->get($t);
	}
    public function ins($t, $object)
	{
		$this->db->insert($t, $object);
	}
    public function getDataId($t, $w)
	{
		
		$this->db->join('provinsi', 'provinsi.id_provinsi = ' . $t . '.id_provinsi', 'left');
		$this->db->where($w);
		return $this->db->get($t);
	}

	public function search($cari)
	{
		return $this->db->query("SELECT * FROM kabupaten as b
		JOIN provinsi as i on i.id_provinsi = b.id_provinsi
		WHERE b.id_kabupaten LIKE '%" . $cari . "%' OR 
		b.nama_kabupaten LIKE '%" . $cari . "%' OR 
		i.nama_prov LIKE '%" . $cari . "%' ");
	}
	
}
