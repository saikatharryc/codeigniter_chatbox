<?php
$this->load->view('/header.php');
if ($this->session->flashdata('success')) {
  echo '<p class="success">' . $this->session->flashdata('success') . '</p>';
}
 
echo validation_errors('<p class="error">', '</p>'); 
if ($shouts) {
  echo '<ul>';
  foreach ($shouts as $shout) {
   
 
    <li>
      <div class="meta">
        <img src="<?= $gravatar ?>" alt="Gravatar" />
        <p><?= $shout->name ?></p>
      </div>
      <div class="shout">
        <p><?= $shout->message ?></p>
      </div>
    </li>
 
    <?php
  }
}
else {
  echo '<p class="error">No shouts found!</p>';
}
 echo form_open('shouts/create'); ?>
  <h2>Shout!</h2>
 
  <div class="fname">
    <label for="name"><p>Name:</p></label>
    <input type="text" name="name" value="<?= set_value('name') ?>" />
    </div>
 
  \
  <textarea name="message" rows="5" cols="40"><?= set_value('message') ?></textarea>
 
  <p><input type="submit" value="Submit" /></p>
  <?php
echo form_close();
$this->load->view('/footer.php');
