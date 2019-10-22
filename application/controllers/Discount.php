<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Discount extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Discount_model');
        $this->load->helper('form');
    }

    public function index(){

        $data['discount_list']=$this->Discount_model->GetDiscounts();
        $this->load->view('admin/managediscount', $data);
    }

    public function edit($id){
        $discount['id'] = $id;
        $this->load->view('admin/editdiscount', $discount);
    }

}
