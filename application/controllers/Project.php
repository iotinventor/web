<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

  function __construct() {
		parent::__construct();
    
    $this->load->model('project_model');
    $this->load->model('boards_model');
    $this->load->model('defgen_model');
    $this->load->model('publication_model');
	}

  public function index() {
    $this->guard();

    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $this->project_model->query_search = $this->input->get('search');
      $config['base_url'] = base_url('project/list');
      if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");

      $config['total_rows']       = $this->project_model->total_rows($this->session->userdata('email'));
      $config['per_page']         = 12;
      $config['uri_segment']      = 3;
      $config['num_links']        = 3;
      $config['full_tag_open']    = '<ul class="pagination">';
      $config['full_tag_close']   = '</ul>';
      $config['first_tag_open']   = '<li class="page-item">';
      $config['first_tag_close']  = '</li>';
      $config['prev_tag_open']    = '<li class="page-item prev">';
      $config['prev_tag_close']   = '</li>';
      $config['next_tag_open']    = '<li class="page-item">';
      $config['next_tag_close']   = '</li>';
      $config['last_tag_open']    = '<li class="page-item">';
      $config['last_tag_close']   = '</li>';
      $config['cur_tag_open']     = '<a class="page-link text-dark bg-primary border-primary">';
      $config['cur_tag_close']    = '</a>';
      $config['num_tag_open']     = '<li class="page-item">';
      $config['num_tag_close']    = '</li>';
      $config['data_page_attr']    = 'class="page-link text-dark border-primary"';
    
      $this->pagination->initialize($config); 
      $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

      $data['limit']      = $config['per_page'];
      $data['total_rows'] = $config['total_rows'];
      $data['pagination'] = $this->pagination->create_links();
      $data['projects']   = $this->project_model->filter(
        $this->session->userdata('email'),
        $page, 
        $config['per_page'],
      );
      $boards = $this->boards_model->all();
      $data["boards"] = $boards;

      $data['controller'] = 'project';

      $this->load->view("project/index", $data);
    }
  }

  public function editor() {
    $this->guard();
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $id = $this->uri->segment(3);
      $project = $this->project_model->get($id);
      $defgens = $this->defgen_model->filter($project->board_id);

      // TODO: jika id tidak ada, harap redirect ke tampilkan 404
      // TODO: jika yang akses bukan pemiliknya, harap tampilkan forbidden
      $data["controller"] = "app";
      $data["project"] = $project;
      $data["defgens"] = $defgens;

      $this->load->view('project/editor', $data);
    } 
  }

  /**
   * Update like a save. You can change code and save it.
   */
  public function update() {
    $this->guard();
    if ($this->input->server('REQUEST_METHOD') === 'POST') 
    {
      $project = $this->project_model->update(
        $this->input->post('id'),
        $this->session->userdata('email'),
        $this->input->post('native'),
        $this->input->post('block'),
        $this->input->post('capture'),
      );

      $project = $this->project_model->get($this->input->post('id'));
      $defgens = $this->defgen_model->filter($project->board_id);

      header('Content-Type: application/json');
      echo json_encode($project);
    }
  }

  public function edit($id) {
    $this->guard();
    $project = $this->project_model->get($id);
    $defgens = $this->defgen_model->filter($project->board_id);

    if ($project->email !== $this->session->userdata("email")) {
      // TODO: !IMPORTANT
      redirect('project');
    }

    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $data['project'] = $project;
      $this->load->view('project/edit', $data);
    } else {
      $this->project_model->edit($id, $this->input->post('title'));
      redirect('project');
    }
  }
  
  public function create() {
    $this->guard();
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
      $board_id = $this->input->post("board_id");
      $board = $this->boards_model->get($board_id);
      $project = $this->project_model->create(
        $this->input->post('title'),
        $this->session->userdata("email"),
        $board_id,
        $board->display_name,
        $board->toolbox_file,
        $board->name,
        $board->fqbn
      );
      $defgens = $this->defgen_model->filter($board_id);
      redirect('project/editor/'.$project->id);
    }
  }

  

  public function delete($id)
  {
    $this->guard();
    if ($this->input->server('REQUEST_METHOD') === 'GET')
    {
      $project = $this->project_model->delete($id);
      $this->session->set_userdata("project", NULL);
      $this->session->set_userdata("defgens", NULL);
      redirect('project');
    }
  }

  public function get_code()
  {
    if ($this->input->server('REQUEST_METHOD') === 'POST')
    {
      $project = $this->project_model->get_code($this->input->post('code'));
      
      header('Content-Type: application/json');
      echo json_encode($project);
    } 
  }

  public function refresh_editor() {
    if ( !empty($this->session->userdata("project")) && !empty($this->session->userdata("defgens"))) {
      $id = $this->session->userdata("project")->id;
      $project = $this->project_model->get($id);
      $defgens = $this->defgen_model->filter($project->board_id);
      $this->session->set_userdata("project", $project);
      $this->session->set_userdata("defgens", $defgens);
    }
  }
}


