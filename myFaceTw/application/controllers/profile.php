<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //$this->load->model('news_model');
  }

  public function index()
  {
    $this->load->helper('url');
    $data['title'] = 'Profile Management';
    //$data['news'] = $this->news_model->get_news();
    $this->load->view('includes/style-include', $data);
		$this->load->view('includes/menu', $data);
    $this->load->view('profile/profile', $data);
  }
}
