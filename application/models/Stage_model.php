<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stage_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('master_stage');
        return $query->result();
    }

    public function getNamaById($id)
    {
        $this->db->select('nama_category');
        $this->db->where('id_category',$id);
        $query = $this->db->get('master_category');

        return $query->row();
    }

}
