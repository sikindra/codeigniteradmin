<?php 
$system_name    = $this->db->get_where('settings', array('type' => 'system_name', 'type' => 'school_id'))->row()->description;
$system_address = $this->db->get_where('settings', array('type' => 'address', 'type' => 'school_id'))->row()->description;
$footer         = $this->db->get_where('settings', array('type' => 'footer', 'type' => 'school_id'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align', 'type' => 'school_id'))->row()->description;
$loginType      = $this->session->userdata('login_type');
$school_id     = $this->session->userdata('school_id');
$running_year   = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
?>

   <?php include 'header.php'; ?>
   
	
	<?php include $loginType.'/'.$page_name.'.php';?>
   
    
               
     <?php  include 'footer.php'; ?>              
               
               
        
           