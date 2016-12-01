<?php


class Shouts extends CI_Controller {
 
  function Shouts() {
    parent::__Construct();
    $this->load->model('shout');
  }
  function index() {
  $data['shouts'] = $this->shout->all_shouts();
  $this->load->view('shouts/index.php', $data);
}
 function create() {
  $data['shouts'] = $this->shout->all_shouts();
   
  $this->form_validation->set_rules('name', 'Name', 'required|max_length[255]|htmlspecialchars');
 
  $this->form_validation->set_rules('message', 'Shout', 'required|htmlspecialchars');
   
  if ($this->form_validation->run() == FALSE) {
    $this->load->view('shouts/index.php', $data);
  }
  else {
    $this->shout->create();
    $this->session->set_flashdata('success', 'Thanks for shouting!');
    redirect('shouts/index');
  }
}
}