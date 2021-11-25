<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) 
        {
            redirect('Login');
        }
        $this->load->model(array('Data_model','Category_model','Initiator_div_model','Recipient_div_model','Stage_model'));
    }

    public function index()
    {
        $data['master_category'] = $this->Category_model->getAll();
        $data['master_initiator_div'] = $this->Initiator_div_model->getAll();
        $data['master_recipient_div'] = $this->Recipient_div_model->getAll();
        $data['master_stage'] = $this->Stage_model->getAll();
        $this->load->view('data/datatable', $data);
    }

    public function getStatusData(){
        $getGroupByStatus = $this->Data_model->getGroupByStatus();
        $data['status_data'] = array();
        foreach ($getGroupByStatus as $value) {
            array_push($data['status_data'], array($value->status, (int)$value->status_count));
        }

        echo json_encode($data);
    }

    public function getEffectivenessData(){
        $getGroupByEffectiveness = $this->Data_model->getGroupByEffectiveness();
        $data['recipient_div'] = array();
        $data['effective'] = array();
        $data['not_effective'] = array();
        foreach ($getGroupByEffectiveness as $value) {
            array_push($data['recipient_div'], array($value->recipient_div));
            array_push($data['effective'], (int)$value->effective);
            array_push($data['not_effective'], (int)$value->not_effective);
        }

        echo json_encode($data);
    }

    public function getStageData(){
        $getGroupByStage = $this->Data_model->getGroupByStage();
        $data['stage_data'] = array();
        foreach ($getGroupByStage as $value) {
            $data['stage_data'][$value->stage] = $value->stage_count;
        }

        echo json_encode($data);
    }

    public function getAll()
    {
        $list = $this->Data_model->getDatatables(); 
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) 
        {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->carp_code;
            $row[] = $field->category;
            $row[] = $field->initiator_div;
            $row[] = $field->recipient_div;
            $row[] = $field->due_date;
            $row[] = $field->stage;
            $row[] = $field->status;
            $row[] = '<a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit(' . "'" . $field->id . "'" . ')"><i class="fas fa-pencil-alt"></i> Edit</a>&nbsp;<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="hapus(' . "'" . $field->id . "'" . ')"><i class="fa fa-trash"></i> Delete</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Data_model->countAll(),
            "recordsFiltered" => $this->Data_model->countFiltered(),
            "data" => $data,
        );

        echo json_encode($output);
    }

    function data_input_form()
    {
        $data['master_category'] = $this->Category_model->getAll();
        $data['master_initiator_div'] = $this->Initiator_div_model->getAll();
        $data['master_recipient_div'] = $this->Recipient_div_model->getAll();
        $data['master_stage'] = $this->Stage_model->getAll();
        $this->load->view('data/data_input_form', $data);
    }

    public function data_insert()
    {
        $now_date_only = date('Y-m-d');
        $now_timestamp = date('Y-m-d H:i:s');
        $data = array(
            'carp_code' => $this->input->post('carp_code'),
            'category' => $this->input->post('category'),
            'initiator' => $this->input->post('initiator'),
            'initiator_div' => $this->input->post('initiator_div'),
            'initiator_branch' => $this->input->post('initiator_branch'),
            'recipient' => $this->input->post('recipient'),
            'recipient_div' => $this->input->post('recipient_div'),
            'recipient_branch' => $this->input->post('recipient_branch'),
            'verified_by' => $this->input->post('verified_by'),
            'due_date' => $this->input->post('due_date'),
            'effectiveness' => $this->input->post('effectiveness'),
            'status_date' => $this->input->post('status_date'),
            'stage' => $this->input->post('stage'),
            'status' => $this->input->post('status'),
            'created_at' => $now_date_only,
            'updated_at' => $now_timestamp
        );

        $id_data = $this->Data_model->insert($data);

        if ($id_data)
        {
            echo json_encode(array("status" => TRUE));
        }
        else
        {
            echo json_encode(array("status" => FALSE));
        }

    }

    public function data_delete($id)
    {
        $this->Data_model->deleteById($id);
        echo json_encode(array("status" => TRUE));
    }

    public function data_edit($id)
    {
        $data = $this->Data_model->getById($id);
        $arr_data = array(
            'carp_code' => $data->carp_code,
            'category' => $data->category,
            'initiator' => $data->initiator,
            'initiator_div' => $data->initiator_div,
            'initiator_branch' => $data->initiator_branch,
            'recipient' => $data->recipient,
            'recipient_div' => $data->recipient_div,
            'recipient_branch' => $data->recipient_branch,
            'verified_by' => $data->verified_by,
            'due_date' => $data->due_date,
            'effectiveness' => $data->effectiveness,
            'status_date' => $data->status_date,
            'stage' => $data->stage,
            'status' => $data->status
        );

        echo json_encode($arr_data);
    }

    public function data_update()
    {
        $id = $this->input->post('id_data');
        $data = array(
            'carp_code' => $this->input->post('carp_code'),
            'category' => $this->input->post('category'),
            'initiator' => $this->input->post('initiator'),
            'initiator_div' => $this->input->post('initiator_div'),
            'initiator_branch' => $this->input->post('initiator_branch'),
            'recipient' => $this->input->post('recipient'),
            'recipient_div' => $this->input->post('recipient_div'),
            'recipient_branch' => $this->input->post('recipient_branch'),
            'verified_by' => $this->input->post('verified_by'),
            'due_date' => $this->input->post('due_date'),
            'effectiveness' => $this->input->post('effectiveness'),
            'status_date' => $this->input->post('status_date'),
            'stage' => $this->input->post('stage'),
            'status' => $this->input->post('status')
        );

        $update = $this->Data_model->update($data,$id);

        if ($update == TRUE)
        {
            echo json_encode(array("status" => TRUE));
        }
        else
        {
            echo json_encode(array("status" => FALSE));
        }
    }

}
