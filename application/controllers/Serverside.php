<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serverside extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Serverside_model');
    }

    public function index()
    {
        $this->load->view('home');
    }


    public function getData()
    {
        $results = $this->Serverside_model->getDataTable();
        $data = [];
        $no = $_POST['start'];
        foreach ($results as $field) {
            $row = array();
            $row[] = ++$no;
            $row[] = $field->npk;
            $row[] = $field->nama;
            $row[] = $field->jabatan;
            $row[] = $field->unit;
            $row[] = $field->nope;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST["draw"],
            // "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->Serverside_model->count_all_data(),
            "recordsFiltered" => $this->Serverside_model->count_filtered_data(),
            "data" => $data,
        );

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
