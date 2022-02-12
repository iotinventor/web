<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webserial extends MY_Controller {
  function __construct()
	{
		parent::__construct();
	}

  public function index()
  {
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $data["controller"] = "webserial";
      $this->load->view("webserial/serial", $data);
    }
  }
}