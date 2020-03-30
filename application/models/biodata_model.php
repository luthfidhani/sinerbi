<?php

class Biodata_model extends CI_Model
{

    function tampil()
    {
        return $this->db->get('mahasiswa');
    }

    function daftar($data,$table)
    {
        $this->db->insert($table,$data);
    }

    function tampil_edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

?>