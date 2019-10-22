<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->model('Category_model');
		$this->load->model('Product_model');
		$this->load->model('Brand_model');
		$this->load->model('Blog_model');
		
		/*$_SESSION['cartAdd'] = NULL;

		$this->load->library('cart');

		$data['setting_list'] = $this->Settings_model->GetSettings();*/

		$data['product_name_list'] = $this->Product_model->GetProductNames();
		$data['latest_product_list']=$this->Product_model->getLatestProduct();
		$data['category_list'] = $this->Category_model->GetCategories();
		$data['brand_list']=$this->Brand_model->GetBrandImages();
		$data['blog_list'] = $this->Blog_model->getLatestBlogs();
		$this->load->view('home', $data);
	}
}
