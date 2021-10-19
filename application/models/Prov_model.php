<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prov_model extends CI_Model 
{
    
	public function get($t)
	{
      return $this->db->query("SELECT provinsi.id_provinsi, provinsi.nama_prov,
      SUM(kabupaten.jml_penduduk) AS jml_penduduk FROM provinsi LEFT JOIN kabupaten
      on kabupaten.id_provinsi=provinsi.id_provinsi
      GROUP BY provinsi.id_provinsi ");
      
        
	}
    public function ins($t, $object)
	{
		$this->db->insert($t, $object);
	}

    public function getDataId($t, $w)
	{
		
		$this->db->join('kabupaten', 'kabupaten.id_provinsi = ' . $t . '.id_provinsi', 'left');
		
        $this->db->where($w);
		return $this->db->get($t);
	}
    public function del($t, $w)
	{
		$this->db->delete($t, $w);
	}
    
	public function updData($t, $object ,$w)
	{
		$this->db->update($t, $object, $w);
	}
   

}