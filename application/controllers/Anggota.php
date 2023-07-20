<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');

        // cek login user
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
            redirect($url);
        };
    }

    public function index()
    {
        $data = array(
            'title' => "Data Anggota",
            'menu' => 'anggota'
        );

        $this->load->view('anggota', $data);
    }

    public function getAnggota()
    {
        $results = $this->Anggota_model->getDataTable();
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
            $row[] = '

            <a href="#" class="btn btn-icon icon-left btn-primary" onclick="byid(' . "'" . $field->id_anggota . "','edit'" . ')"><i class="far fa-edit"></i></a>
            
            <a href="#" class="btn btn-icon icon-left btn-danger" onclick="byid(' . "'" . $field->id_anggota . "','delete'" . ')"><i class="fas fa-trash"></i></a>


            ';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST["draw"],
            // "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->Anggota_model->count_all_data(),
            "recordsFiltered" => $this->Anggota_model->count_filtered_data(),
            "data" => $data,
        );
        // $this->output->set_content_type('application/json')->set_output(json_encode($output));
        echo json_encode($output);
    }

    public function addAnggota()
    {
        $this->_validation();
        $data = [
            'npk' => htmlspecialchars($this->input->post('npk')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'jabatan' => htmlspecialchars($this->input->post('jabatan')),
            'unit' => htmlspecialchars($this->input->post('unit')),
            'pendidikan' => htmlspecialchars($this->input->post('pendidikan')),
            'gender' => htmlspecialchars($this->input->post('gender')),
            'nope' => htmlspecialchars($this->input->post('nope')),
            'agama' => htmlspecialchars($this->input->post('agama')),
            'hobi' => htmlspecialchars($this->input->post('hobi')),
            'tmt_kerja' => htmlspecialchars($this->input->post('tmt_kerja')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
        ];

        if ($this->Anggota_model->create($data) > 0) {
            $message['status'] = 'success';
        } else {
            $message['status'] = 'failed';
        };

        $this->output->set_content_type('application/json')->set_output(json_encode($message));
    }

    public function byid($id_anggota)
    {
        $data = $this->Anggota_model->getdataById($id_anggota);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function updateAnggota()
    {
        $this->_validation();
        $data = [
            'npk' => htmlspecialchars($this->input->post('npk')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'jabatan' => htmlspecialchars($this->input->post('jabatan')),
            'unit' => htmlspecialchars($this->input->post('unit')),
            'pendidikan' => htmlspecialchars($this->input->post('pendidikan')),
            'gender' => htmlspecialchars($this->input->post('gender')),
            'nope' => htmlspecialchars($this->input->post('nope')),
            'agama' => htmlspecialchars($this->input->post('agama')),
            'hobi' => htmlspecialchars($this->input->post('hobi')),
            'tmt_kerja' => htmlspecialchars($this->input->post('tmt_kerja')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
        ];

        if ($this->Anggota_model->update(array('id_anggota' => $this->input->post('id_anggota')), $data) >= 0) {
            $message['status'] = 'success';
        } else {
            $message['status'] = 'failed';
        };

        $this->output->set_content_type('application/json')->set_output(json_encode($message));
    }

    public function deleteAnggota($id_anggota)
    {
        if ($this->Anggota_model->delete($id_anggota) > 0) {
            $message['status'] = 'success';
        } else {
            $message['status'] = 'failed';
        };

        $this->output->set_content_type('application/json')->set_output(json_encode($message));
    }

    private function _validation()
    {
        $data = array();
        $data['inputerror'] = array();
        $data['error_string'] = array();
        $data['status'] = true;

        if ($this->input->post('npk') == '') {
            $data['inputerror'][] = 'npk';
            $data['error_string'][] = 'NPK Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('nama') == '') {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('jabatan') == '') {
            $data['inputerror'][] = 'jabatan';
            $data['error_string'][] = 'Jabatan Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('unit') == '') {
            $data['inputerror'][] = 'unit';
            $data['error_string'][] = 'Unit Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('pendidikan') == '') {
            $data['inputerror'][] = 'pendidikan';
            $data['error_string'][] = 'Pendidikan Terakhir Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('gender') == '') {
            $data['inputerror'][] = 'gender';
            $data['error_string'][] = 'Jenis Kelamin Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('nope') == '') {
            $data['inputerror'][] = 'nope';
            $data['error_string'][] = 'Nomor Hp Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('agama') == '') {
            $data['inputerror'][] = 'agama';
            $data['error_string'][] = 'Agama Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('hobi') == '') {
            $data['inputerror'][] = 'hobi';
            $data['error_string'][] = 'Hobi Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('tmt_kerja') == '') {
            $data['inputerror'][] = 'tmt_kerja';
            $data['error_string'][] = 'TMT Kerja Wajib diisi';
            $data['status'] = false;
        }

        if ($this->input->post('alamat') == '') {
            $data['inputerror'][] = 'alamat';
            $data['error_string'][] = 'Alamat Wajib diisi';
            $data['status'] = false;
        }

        if ($data['status'] === false) {
            echo json_encode($data);
            exit;
        }
    }
}
