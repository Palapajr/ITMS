<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // cek login user
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
            redirect($url);
        };
    }

    public function index()
    {
        $data = array(
            'title' => "Dashboad Meta",
            'menu' => 'dashboard'
        );

        $this->load->view('dashboard', $data);
    }
}
