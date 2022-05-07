<?php 
   $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
   $system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
   ?>
<!DOCTYPE html>  
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="We ddevelop creative software, eye catching software. We also train to become a creative thinker">
      <meta name="author" content="OPTIMUM LINKUP COMPUTERS">
      <link rel="icon"  sizes="26x26" href="<?php echo base_url() ?>uploads/logo.png">
      <title><?php echo $system_title;?></title>
      <!-- Bootstrap Core CSS -->
      
     
      <link href="<?php echo base_url(); ?>optimum/css/style.css" rel="stylesheet">
      <link rel="shortcut icon" href="<?php echo base_url() ?>uploads/logo.png" type="image/x-icon">
      <!-- Bootstrap -->
      <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="<?php echo base_url(); ?>assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Pe-icon-7-stroke -->
      <link href="<?php echo base_url(); ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- style css -->
      <link href="<?php echo base_url(); ?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- color CSS -->
  
      <link href="<?php echo base_url();?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
     
   </head>
   <body>
      <!-- Preloader -->
     
      
         <div class="container-center">
            <div class="login-area">
               <div class="panel panel-bd panel-custom">
                  <div class="panel-heading">
                     <div class="view-header">
                        <div class="header-icon">
                           <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                           <h3>Login</h3>
                           <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                     </div>
                  </div>
                  <div class="panel-body">
                     <form method="post" role="form" id="loginform" action="<?php echo base_url();?>login/validate_login" novalidate>
                        <div class="form-group">
                           <label class="control-label" for="username">Username</label>
                           <input type="email" placeholder="<?php echo get_phrase('email');?>" title="Please enter you username" required="" value="" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                           <label class="control-label" for="password">Password</label>
                           <input type="password" title="Please enter your password" placeholder="<?php echo get_phrase('passord');?>" required="" value="" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                              <div class="checkbox checkbox-primary pull-left p-t-0">
                                 <input id="checkbox-signup" type="checkbox">
                                 <label for="checkbox-signup"> <?php echo get_phrase('remember_me');?> </label>
                              </div>
                              &nbsp;<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right" style="margin-top: 9px;"><i class="fa fa-lock m-r-5"></i> <?php echo get_phrase('forgot_password?');?></a> 
                           </div>
                        </div>
                        <div>
                           <button class="btn btn-add">Login</button>
                        </div>
                     </form>
                      <form method="post" role="form" id="recoverform"   action="<?php echo base_url();?>login/reset_password">
                           
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="<?php echo get_phrase('email');?>" title="Please enter you email adress" required="" value="" name="email"  class="form-control">
                                
                            </div>
                            <div>
                                 <div class="col-xs-6">
                                <a href="<?php echo base_url();?>"><button class="btn btn-add btn-block" type="button" style="color:white"><i class="fa fa-mail-reply-all"></i>&nbsp;<?php echo get_phrase('back_to_login');?></button></a>
                                   </div>
                                <div class="col-xs-6">
                                   
                                <button class="btn btn-add btn-block" type="submit" style="color:white"><i class="fa fa-key"></i>&nbsp;<?php echo get_phrase('reset_password');?></button>
                            </div>
                            </div>
                        </form>
                    
                  </div>
               </div>
            </div>
         
     


     
      <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
  
      <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
     
      <script src="<?php echo base_url(); ?>optimum/js/jquery.slimscroll.js"></script>
      <script src="<?php echo base_url(); ?>optimum/js/custom.min.js"></script>
      <script src="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
      <?php if (($this->session->flashdata('error_message')) !=''):?>
      <script type="text/javascript">
         $(document).ready(function(){
           $.toast({
             heading: 'Error Message',
             text: '<?php echo $this->session->flashdata('error_message');?>',
             position: 'top-right',
             loaderBg: '#ff6849',
             icon:'warning',
             hideAfter: '3500',
             stack: 6
         
           });
         
         });
         
         
      </script>
      <?php endif;?>
   </body>
</html>