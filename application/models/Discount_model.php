<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Discount_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function GetDiscounts()
    {
        $this->db->select('*');
        $this->db->from('discount');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function Update($id, $formData){
        $this->db->where('Id',$id);
        $this->db->update('Discount', $formData);
    }
}
