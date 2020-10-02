<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perpus extends CI_Model
{
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    function get_data($table){
        return $this->db->get($table);
    }
}
