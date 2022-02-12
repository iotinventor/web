<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Boards_model extends CI_Model {
  private $table = "boards";

  public function all()
  {
    $query = $this->db->get_where($this->table);
    $projects = $query->result();
    if ( $projects )
    {
      return $projects;
    }
    else
    {
      return FALSE;
    }
  }

  public function get($board_id)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('id', $board_id);
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