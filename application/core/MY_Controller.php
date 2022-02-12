<?php

class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  function client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
  }

  public function is_authenticated() {
    $is_authenticated = $this->session->userdata('is_authenticated');
    return isset($is_authenticated) && ($is_authenticated == TRUE);
  }

  protected function set_authenticated() {
    $this->session->set_userdata('is_authenticated', TRUE);
  }

  public function guard() {
    if ( !$this->is_authenticated() ) {
      redirect('home');
    }
  }

  public function prevent_authentication() {
    if ( $this->is_authenticated() ) {
      redirect('dashboard');
    }
  }
}