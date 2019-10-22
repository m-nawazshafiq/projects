<?php
class Customer_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function addCustomer($user) {

        $this->db->insert('customer',$user);
        $id=$this->db->insert_id();

        $data = array(
            'email' => $user['EmailAddress']
        );

        $this->session->set_userdata($data);

        return true;
    }

    public function getUserCount(){
        return $this->db->count_all('customer');
    }

    public function changePassword($userId,$currentPass, $newPass){

        $success=false;
        $this->db->set("Password",$newPass);
        $this->db->where("Id",$userId);
        $this->db->where("Password",$currentPass);
        $this->db->update("customer");

        if($this->db->affected_rows() > 0){
            $success=true;
        }

        return $success;
    }

    public function login(){

        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('pass'));
        $remmemberMe=$this->input->post('rememberme');
        $this->db->where('EmailAddress', $email);
        $this->db->where('Password', $password);
        $this->db->from('customer');
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            
            $row = $query->row_array();
            
            $this->session->set_userdata('email', $row['EmailAddress']);

            if($remmemberMe == 'on'){
                $cookie = array(
                    'name'   => 'remember_me',
                    'value'  => $email,                           
                    'expire' => time()+86500
                    );
                $this->input->set_cookie($cookie);
            }
            return true;
        }
        else {
            $this->session->unset_userdata('email');
            return false;
        }
    }

    public function checkUserEmail($email){
        
        //die(print_r($name));
        $this->db->where('EmailAddress',$email);

        $this->db->from('customer');
        $query = $this->db->get();
        if($query->num_rows()==0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function GetCustomers()
    {
        $this->db->select('*');
        $this->db->from('customer');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function deleteCustomer($customerId)
    {
        $this->db->where("Id", $customerId);
        $this->db->delete("customer");
    }

    public function getCustomerById($id)
    {
        $this->db->where("Id", $id);
        return $this->db->get("customer")->result_array();
    }

    public function getId($email){
        $this->db->select('Id');
        $this->db->where('EmailAddress',$email);
        $query=$this->db->get("customer");
        return $query->row()->Id;
    }

    public function update($id, $formData)
    {
        $this->db->where("Id", $id);
        $this->db->update("customer", $formData);
    }

    public function saveBillingDetail($data){
        $this->db->insert("billingaddress",$data);
    }

    public function saveShippingDetail($data){
        $this->db->insert("shippingaddress",$data);
    }

    public function getBillingDetail($id){
        $this->db->where("userid",$id);
        return $this->db->get("billingaddress")->result_array();
    }
    
    public function getShippingDetail($id){
        $this->db->where("userid",$id);
        return $this->db->get("shippingaddress")->result_array();
    }

    public function updateBillingDetail($id,$data){
        $this->db->where("userid",$id);
        $this->db->update("billingaddress",$data);
    }

    public function updateShippingDetail($id,$data){
        $this->db->where("userid",$id);
        $this->db->update("shippingaddress",$data);
    }

    public function getCountries(){
        $this->db->select('*');
        $this->db->from('countries');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getStates($id){
        $this->db->select('*');
        $this->db->from('states');
        $this->db->where("country_id",$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getRelatedStates($id){
        $this->db->where("country_id",$id);
        return $this->db->get("states")->result();
    }

    public function newsletterSubscription($id,$val){
        $this->db->set("newsletter",$val);
        $this->db->where("Id",$id);
        $this->db->update("customer");
    }
    public function getCustomerId(){
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
        //echo ($email);
        // Prep the query

        $this->db->where('EmailAddress', $email);
        $this->db->where('Password', $password);
        $this->db->from('customer');
        // Run the query
        $query = $this->db->get();

        //die(print_r($query));
        // Let's check if there are any results
        if ($query->num_rows() == 1) {
            // If there is a er, then create session data
            //echo "yes";
            $row = $query->row_array();
            $data = array(
                'userid' => $row['id'],
                'userName' => $row['UserName'],
                'email' => $row['EmailAddress'],
                'password' => $row['Password'],
                'validated' => true
            );
            $this->session->set_userdata($data);
            return $row['Id'];
        }
        // If the previous process did not validate
        // then return false.
        else {
            $unsetArr = array('userid', 'userName', 'email', 'password', 'validated');
            $this->session->unset_userdata($unsetArr);
            return NULL;
        }
    }
}
