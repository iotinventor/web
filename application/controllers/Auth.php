<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// wellcome
class Auth extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

  public function signup() {
    $this->prevent_authentication();

    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $data["controller"] = "auth";
      $this->load->view('auth/signup', $data);
    } else {
      $user = $this->user_model->signup(
        $this->input->post('email'),
        $this->input->post('password'),
        $this->input->post('first_name'),
        $this->input->post('last_name'),
        TRUE,
      );

      if ( $user ) { redirect('auth'); }
    }
	}

  public function index() {
    $this->prevent_authentication();

    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $data["controller"] = "auth";
      $this->load->view('auth/signin', $data);
    } else {
      $user = $this->user_model->signin($this->input->post('email'), $this->input->post('password'));
      if ($user) {
        $this->session->set_userdata('email', $user->email);
        $this->session->set_userdata('first_name', $user->first_name);
        $this->session->set_userdata('last_name', $user->last_name);
        $this->session->set_userdata('is_authenticated', TRUE);

        if ($this->input->post('redirect')) {
          redirect($this->input->post('redirect'));
        } else {
          redirect('dashboard');
        }
      }

    }
  }

  public function signout() {
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $data["controller"] = "auth";
      $this->load->view('auth/signout', $data);
    } else {
      $this->session->sess_destroy();
      redirect('');
    }
  }
}
