<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	var $table = 'data';
    var $column_order = array(null, 'carp_code', 'category', 'initiator_div', 'recipient_div', 'due_date', 'stage', 'status', null);
    var $column_search = array('carp_code', 'category', 'initiator_div', 'recipient_div', 'due_date', 'stage', 'status');
    var $order = array('id' => 'desc');

    public function __construct() {
        parent::__construct();
    }

    private function _get_datatables_query() {   
    	$this->db->select('*');
    	$this->db->from($this->table);

    	$i = 0;

    	foreach ($this->column_search as $item) 
    	{
    		if($_POST['search']['value']) 
    		{

    			if($i===0) 
    			{
    				$this->db->group_start(); 
    				$this->db->like($item, $_POST['search']['value']);
    			}
    			else
    			{
    				$this->db->or_like($item, $_POST['search']['value']);
    			}

    			if(count($this->column_search) - 1 == $i) 
    				$this->db->group_end(); 
    			$i++;
    		}

    		if(isset($_POST['order'])) 
    		{
    			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    		} 
    		else if(isset($this->order))
    		{
    			$order = $this->order;
    			$this->db->order_by(key($order), $order[key($order)]);
    		}
    	}
    }

    function getDatatables() {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        // echo $this->db->last_query(); die();
        return $query->result();
    }

    function countFiltered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function countAll() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function insert($data) {
        $this->db->insert('data', $data);
        return $this->db->insert_id();
    }

    public function deleteById($id){
        $this->db->where('id', $id);
        $this->db->delete('data');
    }

    public function getById($id) {
    	$this->db->select('*');
    	$this->db->where('id',$id);
    	$query = $this->db->get('data');
    	return $query->row();
    }

    public function update($data,$id) {
    	$this->db->set($data);
    	$this->db->where('id',$id);
    	$this->db->update('data');

        return ($this->db->affected_rows() > 0);
    }

    public function getAll() {
        $query = $this->db->get('cc');
        return $query->result();
    }

    public function getGroupByStatus() {
        $this->db->select('count(id) as status_count ,status');
        $this->db->group_by('status');
        $query = $this->db->get('data');

        return $query->result();
    }

    public function getGroupByEffectiveness() {
        $this->db->select('recipient_div, count(case when effectiveness = "Effective" then 1 end) as "effective", 
                            count(case when effectiveness = "Not Effective" then 1 end) as "not_effective"');
        $this->db->from('((select id, recipient_div, effectiveness from data where effectiveness = "Effective") 
                        UNION ALL
                        (select id, recipient_div, effectiveness from data where effectiveness = "Not Effective")) eff');
        $this->db->group_by('recipient_div');
        $query = $this->db->get();

        return $query->result();
    }

    public function getGroupByStage() {
        $this->db->select('stage, count(stage) as stage_count');
        $this->db->group_by('stage');
        $query = $this->db->get('data');

        return $query->result();
    }

}
