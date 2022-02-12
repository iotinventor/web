<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Publication_model extends CI_Model {
  private $table = "publication";
  public $query_search = NULL;

  public function all($page, $per_page) {
    $result = $this->db->select("*, boards.id as board_id, publication.id as id")
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%'")
      ->order_by("created", "DESC")
      ->limit($per_page, $page)
      ->join('boards', "$this->table.board_id = boards.id")
      ->get()
      ->result();
    
    if ($result) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function latest($email, $limit=3) {
    $projects = $this->db->select("*, boards.id as board_id, publication.id as id")
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%' AND publisher = '$email'")
      ->order_by("created", "DESC")
      ->limit("$limit")
      ->join('boards', "$this->table.board_id = boards.id")
      ->get()
      ->result();

    if ($projects) {
      return $projects;
    } else {
      return FALSE;
    }
  }

  public function total_rows($email) {
    $result = $this->db->select("*")
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%' AND publisher='$email'")
      ->get()
      ->num_rows();
    
    if ($result) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function total_all_rows() {
    $result = $this->db->select("*")
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%'")
      ->get()
      ->num_rows();
    
    if ($result) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function filter($email, $page, $per_page) {
    $result = $this->db->select("*, boards.id as board_id, publication.id as id")
      ->from($this->table)
      ->where("title LIKE '%$this->query_search%' AND publisher='$email' LIMIT $page, $per_page")
      ->join('boards', "$this->table.board_id = boards.id")
      ->get()
      ->result();
    
    if ($result) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function create($project, $new_title, $description, $email, $link_tutorial)
  {
    $data = array(
      "title" => $new_title,
      "publisher" => $project->email,
      "board_id" => $project->board_id,
      "display_name"=> $project->display_name,
      "toolbox_file" => $project->toolbox_file,
      "board_name" => $project->board_name,
      "fqbn" => $project->fqbn,
      "native" => $project->native,
      "block" => $project->block,
      "code" => $project->code,
      "description" => $description,
      'publisher' => $email,
      "link_tutorial" => $link_tutorial
    );

    $publication = $this->db->insert($this->table, $data);

    if ( $publication )
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
}