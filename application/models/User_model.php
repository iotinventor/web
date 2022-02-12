<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model {
  private $table = "user";

  public function signup($email, $password, $first_name, $last_name, $is_active)
  {
    $data = array(
      "email" => $email,
      "password" => password_hash($password, PASSWORD_DEFAULT),
      "first_name" => $first_name,
      "last_name" => $last_name,
      "is_active" => $is_active
    );

    if ( $this->db->insert($this->table, $data) )
    {
      return $this->get($email);
    }
    else
    {
      return FALSE;
    }
  }

  public function get($email)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('email', $email);
    $result = $this->db->get();

    if ( $result )
    {
      return $result;
    }
    else
    {
      return FALSE;
    }
  }

  public function signin($email, $password)
  {
    $query = $this->db->get_where($this->table, array( 'email' => $email ));
    $user = $query->row();

    if ( $user )
    {
      if ( password_verify($password, $user->password) )
      {
        return $user;
      }
    }

    return FALSE;
  }
}