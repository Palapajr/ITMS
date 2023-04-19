<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    var $table = 'anggota';
    var $column_order = array('id_anggota', 'npk', 'nama', 'jabatan', 'unit', 'pendidikan', 'gender', 'nope', 'agama', 'hobbi', 'tmt_kerja', 'alamat', null, null);
    var $order = array('id_anggota', 'npk', 'nama', 'jabatan', 'unit', 'pendidikan', 'gender', 'nope', 'agama', 'hobbi', 'tmt_kerja', 'alamat', null, null);

    private function _get_data_query()
    {
        $this->db->from($this->table);
        if (isset($_POST['search']['value'])) {
            $this->db->like('npk', $_POST['search']['value']);
            $this->db->or_like('nama', $_POST['search']['value']);
            $this->db->or_like('jabatan', $_POST['search']['value']);
            $this->db->or_like('unit', $_POST['search']['value']);
            $this->db->or_like('nope', $_POST['search']['value']);
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_anggota', 'DESC');
        }
    }

    public function getDataTable()
    {
        $this->_get_data_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered_data()
    {
        $this->_get_data_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function create($data)
    {
        $this->db->insert('anggota', $data);
        return $this->db->affected_rows();
    }

    public function getdataById($id_anggota)
    {
        return $this->db->get_where($this->table, ['id_anggota' => $id_anggota])->row();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id_anggota)
    {
        $this->db->delete($this->table, ['id_anggota' => $id_anggota]);
        return $this->db->affected_rows();
    }
}
