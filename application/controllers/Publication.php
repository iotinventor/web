<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publication extends MY_Controller {

  function __construct() {
		parent::__construct();
    $this->load->model('publication_model');
    $this->load->model('project_model');
	}

  public function index() { 
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $this->publication_model->query_search = $this->input->get('search');
      $config['base_url'] = base_url('publication/list');
      if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($this->input->get(), '', "&");

      $config['total_rows']       = $this->publication_model->total_rows($this->session->userdata('email'));
      $config['per_page']         = 12;
      $config['uri_segment']      = 3;
      $config['num_links']        = 3;
      $config['full_tag_open']    = '<ul class="pagination">';
      $config['full_tag_close']   = '</ul>';
      $config['first_link']       = true;
      $config['last_link']        = true;
      $config['first_tag_open']   = '<li class="page-item">';
      $config['first_tag_close']  = '</li>';
      $config['prev_link']        = '&laquo';
      $config['prev_tag_open']    = '<li class="page-item prev">';
      $config['prev_tag_close']   = '</li>';
      $config['next_link']        = '&raquo';
      $config['next_tag_open']    = '<li class="page-item">';
      $config['next_tag_close']   = '</li>';
      $config['last_tag_open']    = '<li class="page-item">';
      $config['last_tag_close']   = '</li>';
      $config['cur_tag_open']     = '<li class="page-item active bg-primary"><a class="page-link text-dark bg-primary border-primary">';
      $config['cur_tag_close']    = '</a></li>';
      $config['num_tag_open']     = '<li class="page-item">';
      $config['num_tag_close']    = '</li>';
      $config['data_page_attr']    = 'class="page-link text-dark border-primary"';
    
      $this->pagination->initialize($config); 

      $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
      $data['limit']          = $config['per_page'];
      $data['total_rows']     = $config['total_rows'];
      $data['pagination']     = $this->pagination->create_links();
      $data['publications']   = $this->publication_model->filter(
        $this->session->userdata('email'),
        $page, 
        $config['per_page'],
      );
      
      $data['controller'] = 'publication';

      $this->load->view("publication/index", $data);
    }
  }

  public function all() {
    $this->guard();
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $this->publication_model->query_search = $this->input->get('search');
      $config['base_url'] = base_url('publication/all');
      if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($this->input->get(), '', "&");

      $config['total_rows']       = $this->publication_model->total_rows($this->session->userdata('email'));
      $config['per_page']         = 12;
      $config['uri_segment']      = 3;
      $config['num_links']        = 3;
      $config['full_tag_open']    = '<ul class="pagination">';
      $config['full_tag_close']   = '</ul>';
      $config['first_link']       = true;
      $config['last_link']        = true;
      $config['first_tag_open']   = '<li class="page-item">';
      $config['first_tag_close']  = '</li>';
      $config['prev_link']        = '&laquo';
      $config['prev_tag_open']    = '<li class="page-item prev">';
      $config['prev_tag_close']   = '</li>';
      $config['next_link']        = '&raquo';
      $config['next_tag_open']    = '<li class="page-item">';
      $config['next_tag_close']   = '</li>';
      $config['last_tag_open']    = '<li class="page-item">';
      $config['last_tag_close']   = '</li>';
      $config['cur_tag_open']     = '<li class="page-item active bg-primary"><a class="page-link text-dark bg-primary border-primary">';
      $config['cur_tag_close']    = '</a></li>';
      $config['num_tag_open']     = '<li class="page-item">';
      $config['num_tag_close']    = '</li>';
      $config['data_page_attr']    = 'class="page-link text-dark border-primary"';
    
      $this->pagination->initialize($config); 
      $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

      $data['limit']      = $config['per_page'];
      $data['total_rows'] = $config['total_rows'];
      $data['pagination'] = $this->pagination->create_links();
      $data['publications']   = $this->publication_model->filter(
        $this->session->userdata('email'),
        $page, 
        $config['per_page'],
      );
      
      $data['controller'] = 'publication';

      $this->load->view("publication/all", $data);
    }
  }

  public function publish($id) {
    $this->guard();
    
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $project = $this->project_model->get($id);
      $data = array(
        "project" => $project,
        "controller" => "publication"
      );
      $this->load->view("publication/publish", $data); 
    } else {
      $project = $this->project_model->get($id);
      $this->publication_model->create(
        $project, 
        $this->input->post("title") ? $this->input->post("title") : $project->title, 
        $this->input->post('description') ? $this->input->post('description'):"This publication is without description",
        $this->session->userdata('email'),
        $this->input->post('link_tutorial') ? $this->input->post('link_tutorial') : NULL
      );

      redirect('publication');
    }
  }

  public function clone($id) {
    $this->guard();
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $publication = $this->publication_model->get($id);
      $data["publication"] = $publication;
      $data["controller"] = "publication";
      $this->load->view("publication/clone", $data);
    } else {
      $publication = $this->publication_model->get($id);
      $project = $this->project_model->create_from_publication(
        $publication, 
        $this->session->userdata('email'),
        $this->input->post("title") ? $this->input->post("title") : $publication->title,
      );
      redirect('project/editor/' . $project->id);
    }
  }
}


