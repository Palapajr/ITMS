<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        // cek login user
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
            redirect($url);
        };
    }

    public function index()
    {
        $sum['totaluser'] = $this->login_model->getall();
        $data = array(
            'title' => "Dashboad Meta",
            'menu' => 'dashboard'
        );

        $this->load->view('dashboard', $sum, $data);
    }
}
