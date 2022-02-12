<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Project_model extends CI_Model {
  private $table = "project";
  public $query_search = NULL;

  public function latest($email, $limit=7)
  {
    $projects = $this->db->select('*, boards.id as board_id, project.id as id')
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%' AND email = '" . $email . "'")
      ->order_by("created", "DESC")
      ->limit("$limit")
      ->join('boards', "$this->table.board_id = boards.id", "left")
      ->get()
      ->result();
    if ( $projects )
    {
      return $projects;
    }
    else
    {
      return FALSE;
    }
  }

  public function total_rows($email)
  {
    $projects = $this->db->select('*')
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%' AND email = '$email'")
      ->get()
      ->num_rows();
    
    if ( $projects )
    {
      return $projects;
    }
    else
    {
      return FALSE;
    }
  }

  public function is_not_empty($email)
  {
    $projects = $this->db->select('*')
      ->from($this->table)
      ->where("email = '$email'")
      ->get()
      ->num_rows();
    
    if ( $projects )
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  public function filter($email, $page, $per_page)
  {
    
    $projects = $this->db->select('*, boards.id as board_id, project.id as id')
    ->from($this->table)
    ->where("title LIKE '%$this->query_search%' AND email = '$email'")
    ->order_by("created", "DESC")
    ->limit($per_page, $page)
    ->join('boards', "$this->table.board_id = boards.id")
    ->get()
    ->result();

    if ( $projects )
    {
      return $projects;
    }
    else
    {
      return FALSE;
    }
  }

  public function create($title, $email, $board_id, $display_name, $toolbox_file, $board_name, $fqbn)
  {
    $data = array(
      "title" => $title,
      "email" => $email,
      "board_id" => $board_id,
      "display_name"=> $display_name,
      "toolbox_file" => $toolbox_file,
      "board_name" => $board_name,
      "fqbn" => $fqbn,
      "native" => "void setup() {} void loop() {}",
      "block" => $this->db->escape($this->default_block()),
      "code" => $this->generate_code(),
    );

    $project = $this->db->insert($this->table, $data);

    if ( $project )
    {
      return $this->get($this->db->insert_id());
    }
    else 
    {
      return FALSE;
    }
  }

  public function create_from_publication($publisher, $email, $new_title)
  {
    $data = array(
      "title" => $new_title,
      "email" => $email,
      "board_id" => $publisher->board_id,
      "display_name"=> $publisher->display_name,
      "toolbox_file" => $publisher->toolbox_file,
      "board_name" => $publisher->board_name,
      "fqbn" => $publisher->fqbn,
      "native" => $publisher->native,
      "block" => $publisher->block,
      "code" => $this->generate_code(),
    );

    $project = $this->db->insert($this->table, $data);

    if ( $project )
    {
      return $this->get($this->db->insert_id());
    }
    else 
    {
      return FALSE;
    }
  }

  public function get($id)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('id', $id);
    $result = $this->db->get();

    if ( $result )
    {
      return $result->row();
    }
    else
    {
      return FALSE;
    }
  }

  public function update($id, $email, $native, $block)
  {
    $data = array(
      "native" => $native,
      "block" => $this->db->escape($block),
      "code" => $this->generate_code()
    );

    $result = $this->db->update($this->table, $data, array("id" => $id, "email" => $email));

    if ( $result )
    {
      return $this->get($id);
    }
    else
    {
      return FALSE;
    }
  }

  public function edit($id, $title) {
    $data = array(
      "title" => $title ? $title : "Untitled Project"
    );

    $result = $this->db->update($this->table, $data, array("id" => $id));

    if ( $result )
    {
      return $this->get($id);
    }
    else
    {
      return FALSE;
    }
  }

  public function delete($id)
  {
    $this->db->delete($this->table,array('id' => $id));
  }

  public function generate_code($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  public function default_block()
  {
    return '<xml xmlns="http://www.w3.org/1999/xhtml"><block type="setup" id="1" x="11" y="11"></block><block type="forever" id="2" x="11" y="95"></block></xml>';
  }

  public function get_code($code)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('code', $code);
    $result = $this->db->get();

    if ( $result )
    {
      return $result->row();
    }
    else
    {
      return FALSE;
    }
  }
}