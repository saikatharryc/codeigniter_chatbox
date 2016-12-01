<?php
class Shout extends CI_Model {
 
  function Shout() {
    parent::__Construct();
  }
  function all_shouts() {
  $data = array();
  $this->db->order_by('id', 'DESC');
  $q = $this->db->get('shouts', 10);
   
  if ($q->num_rows() > 0) {
    foreach ($q->result() as $row) {
      $data[] = $row;
    }
  }
   
  return $data;
  $q->free_result();
}
function create() {
  $data = array(
    'name'    =>  $this->form_validation->set_value('name'),
    'message' =>  $this->form_validation->set_value('message')
  );
  $this->db->insert('shouts', $data);
}
 
}