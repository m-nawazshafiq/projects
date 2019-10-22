<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function _Contructor()
    {
        parent::__construct();
    }

    public function signup()
    {
        $this->load->model('Customer_model');
        $this->load->model('Product_model');
        $this->load->model('Category_model');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customer.EmailAddress]');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required|matches[pass]');


        $this->form_validation->set_message('required', 'Field required !');
        $this->form_validation->set_message('is_unique', 'Email already exist!');
        $this->form_validation->set_message('valid_email', 'Invaid Email');
        $this->form_validation->set_message('matches', 'Password does not match!');
        $this->form_validation->set_message('min_length', 'Short password(minimum 8 charecters)!');
        $this->form_validation->set_message('regex_match', 'Invalid number');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/register', $data);
        } else {
            $user['firstName'] = $this->input->post('firstname');
            $user['lastName'] = $this->input->post('lastname');
            $user['EmailAddress'] = $this->input->post('email');
            $user['Password'] = $this->input->post('pass');
            $user['contact'] = $this->input->post('contact');
            $user['CreatedBy'] = '1';
            $user['CreatedDate'] = date('Y-m-d');
            if (!$this->Customer_model->addCustomer($user)) {
                print_r("No");
            } else {
                redirect(base_url() . 'User/profile');
            }
        }
    }

    public function login()
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $this->load->model('Customer_model');

        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/login', $data);
        } else {
            $result = $this->Customer_model->login();

            if ($result == FALSE) {
                $this->session->set_flashdata('fail', 'Incorrect email or password');
                $this->session->set_flashdata('dbError', $this->input->post('email'));
                redirect(base_url() . 'User/login');
            } else {
                redirect(base_url() . 'User/profile');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $cookie = array(
            'name'   => 'remember_me',
            'value'  => '',
            'expire' => 0
        );
        delete_cookie($cookie);
        redirect(base_url());
    }

    public function changePassword()
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        $userId = $this->Customer_model->getId($this->session->email);

        $this->form_validation->set_rules('currentPassword', 'Current Password', 'required|min_length[8]');
        $this->form_validation->set_rules('newPassword', 'New Password', 'required|min_length[8]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[newPassword]');

        if ($this->form_validation->run() == TRUE) {
            $currPass = $this->input->post('currentPassword');
            $newPass = $this->input->post('newPassword');
            if (!$this->Customer_model->changePassword($userId, $currPass, $newPass)) {
                $this->session->set_flashdata('error', 'Invalid current password');
            }
            redirect(base_url() . "User/changePassword");
        } else {
            $this->load->view('user/changepassword', $data);
        }
    }

    public function profile()
    {
        $this->session->unset_userdata('addressType');
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');

        $userEmail = $this->session->email;
        $userId = $this->Customer_model->getId($userEmail);

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $data['billingdetail'] = $this->Customer_model->getBillingDetail($userId);
        $data['shippingdetail'] = $this->Customer_model->getShippingDetail($userId);

        $data['customer'] = $this->Customer_model->getCustomerById($userId);

        $this->load->view('user/profile', $data);
    }

    public function editPersonalInfo()
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');
        $this->load->library('form_validation');

        $data = array();
        $data['viewType'] = "profile";
        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $userEmail = $this->session->email;
        $id = $this->Customer_model->getId($userEmail);

        $customer = $this->Customer_model->getCustomerById($id);

        $data['customer'] = $customer[0];

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');

        if ($this->form_validation->run() == TRUE) {
            $formdata['firstName'] = $this->input->post('firstname');
            $formdata['lastName'] = $this->input->post('lastname');
            $formdata['EmailAddress'] = $this->input->post('email');
            $formdata['contact'] = $this->input->post('contact');
            $this->Customer_model->update($id, $formdata);
            redirect(base_url() . 'User/profile');
        } else {
            $this->load->view('user/editprofile', $data);
        }
    }

    public function newsletter()
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();

        $userEmail = $this->session->email;
        $id = $this->Customer_model->getId($userEmail);

        $this->form_validation->set_rules('newsletterSubs', 'Subsribe', 'required');

        $this->form_validation->set_message('required', 'Please select an option');

        if ($this->form_validation->run() == TRUE) {
            $this->Customer_model->newsletterSubscription($id, $this->input->post('newsletterSubs'));
            redirect(base_url()."User/profile");
        }

        $this->load->view("user/newsletter", $data);
    }

    public function address($type)
    {
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');

        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('contact', 'Phone', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('address2', 'Address2', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('postcode', 'PostCode/ZIP', 'required');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_message('required', 'Field required');
        $userEmail = $this->session->email;
        $userId = $this->Customer_model->getId($userEmail);

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        $data['countries'] = $this->Customer_model->getCountries();

        if ($this->form_validation->run() == TRUE) {
            $form_data['firstname'] = $this->input->post('firstname');
            $form_data['lastname'] = $this->input->post('lastname');
            $form_data['company'] = $this->input->post('company');
            $form_data['phone'] = $this->input->post('contact');
            $form_data['address1'] = $this->input->post('address1');
            $form_data['address2'] = $this->input->post('address2');
            $form_data['city'] = $this->input->post('city');
            $form_data['country'] = $this->input->post('country');
            $form_data['postcode'] = $this->input->post('postcode');
            $form_data['region'] = $this->input->post('region');
            $form_data['email'] = $this->input->post('email');
            $form_data['userid'] = $userId;

            if ($type == 'addbilling') {

                $this->Customer_model->saveBillingDetail($form_data);
            } else if ($type == 'addshipping') {

                $this->Customer_model->saveShippingDetail($form_data);
            } else if ($type == 'editbilling') {

                $this->Customer_model->updateBillingDetail($userId, $form_data);
            } else if ($type == 'editshipping') {

                $this->Customer_model->updateShippingDetail($userId, $form_data);
            }

            redirect(base_url() . "User/profile");
        } else {

            if ($type == 'addbilling') {

                $data['addressDetail'] = $this->Customer_model->getBillingDetail($userId);

                if (count($data['addressDetail'][0]) == 0) {

                    $this->session->set_flashdata('addressType', 'addbilling');
                    $this->load->view('user/addAddress', $data);
                } else {
                    redirect(base_url() . "User/address/editbilling");
                }

            } else if ($type == 'addshipping') {

                $data['addressDetail'] = $this->Customer_model->getBillingDetail($userId);

                if (count($data['addressDetail'][0]) == 0) {

                    $this->session->set_flashdata('addressType', 'addshipping');
                    $this->load->view('user/addAddress', $data);
                } else {
                    redirect(base_url() . "User/address/editbilling");
                }

            } else if ($type == 'editbilling') {

                $data['addressDetail'] = $this->Customer_model->getBillingDetail($userId);

                if (count($data['addressDetail'][0]) > 0) {
                    $this->session->set_flashdata('addressType', 'editbilling');
                    $data['states'] = $this->Customer_model->getRelatedStates($data['addressDetail'][0]['country']);
                    $this->load->view('user/editAddress', $data);
                } else {
                    redirect(base_url() . "User/profile");
                }
            } else if ($type == 'editshipping') {
                $data['addressDetail'] = $this->Customer_model->getShippingDetail($userId);
                if (count($data['addressDetail'][0]) > 0) {
                    $this->session->set_flashdata('addressType', 'editshipping');
                    $data['states'] = $this->Customer_model->getRelatedStates($data['addressDetail'][0]['country']);
                    $this->load->view('user/editAddress', $data);
                } else {
                    redirect(base_url() . "User/profile");
                }
            }
        }
    }

    public function order(){
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');
        $this->load->model('Order_model');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        
        $userEmail = $this->session->email;
        $id = $this->Customer_model->getId($userEmail);

        $data['userOrders']=$this->Order_model->getOrderByUserId($id);

        $this->load->view("user/order",$data);
    }

    public function wishlist(){
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Customer_model');
        $this->load->model('Wishlist_model');

        $data['cat_display'] = "hide";
        $data['product_name_list'] = $this->Product_model->GetProductNames();
        $data['category_list'] = $this->Category_model->GetCategories();
        
        $userEmail = $this->session->email;
        $id = $this->Customer_model->getId($userEmail);

        $data['userWishlist']=$this->Wishlist_model->getWishlistByUserId($id);

        $this->load->view("user/wishlist",$data);
    }

    public function getStates()
    {
        $json = array();
        $this->load->model('Customer_model');
        $json = $this->Customer_model->getStates($this->input->post('countryID'));
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}
