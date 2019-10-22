<?php
class Specification_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function SaveSpecification($data)
    {
        //print_r($data);
        return $this->db->insert('Specification', $data);
    }

    public function SaveProductSpecification($data){
        return $this->db->insert('productspecification', $data);
    }

    //0 status to get all specs
    public function GetSpecification($status = '0')
    {
        if($status == '0'){
            $this->db->select('*');
            $this->db->from('specification');
            $query = $this->db->get();
            $result = $query->result();
        }else{
            $this->db->select('id,name');
            $this->db->from('specification');
            $this->db->where("status", 1);
            $query = $this->db->get();
            $result = $query->result();
        }
        
        return $result;
    }
    

    public function deleteSpecification($attributeId)
    {
        $this->db->where("Id", $attributeId);
        $this->db->delete("specification");
    }

    public function getSpecificationById($id)
    {
        $this->db->where("Id", $id);
        return $this->db->get("specification")->result_array();
    }

    public function update($id, $formData)
    {
        $this->db->where("Id", $id);
        $this->db->update("specification", $formData);
    }
}
