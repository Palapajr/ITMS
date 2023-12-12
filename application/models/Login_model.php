<?php

class Login_model extends CI_Model
{

    function query_validasi_username($username)
    {
        $result = $this->db->query("SELECT * FROM user WHERE username='$username' LIMIT 1");
        return $result;
    }

    function query_validasi_password($username, $password)
    {
        $result = $this->db->query("SELECT * FROM user WHERE username='$username' AND password=SHA2('$password', 224) LIMIT 1");
        return $result;
    }

    public function getall()
    {
        $query = $this->db->get('user');
		return $query->num_rows();

        // $query = $this->db->get('testing');
        // if ($query->num_rows() > 0) {
        //     return $query->num_rows();
        // } else {
        //     return 0;
        // }
    }
}
