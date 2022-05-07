<section class="content">
<div class="row">
   <div class="col-sm-7">
      <div class="panel panel-bd lobidrag">
         <div class="panel-heading">
            <div class="btn-group" id="buttonexport">
               <a href="#">
                  <h4><span><i class="fa fa-gear" style="font-size: 20px;"></i></span> EDIT DETAILS</h4>
               </a>
            </div>
         </div>
         <div class="panel-body">
            <?php echo form_open(base_url(). 'admin/manage_profile/update', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>
            <div class="row">
               <?php 
                  foreach ($edit_profile as $key => $row):
                  ?>
               <div class="form-group col-lg-12">
                  <label>Username</label>
                  <input type="text" value="<?php echo $row['name'];?>" id="username" class="form-control" name="name">
               </div>
               <div class="form-group col-lg-12">
                  <label>Email Address</label>
                  <input type="email" value="<?php echo $row['email'];?>" id="email" class="form-control" name="email">
               </div>
               <div class="form-group col-lg-12">
                  <label>Contact NO.</label>
                  <input type="text" value="<?php echo $row['phone'];?>" id="phone" class="form-control" name="phone">
               </div>
               <div class="form-group col-lg-12">
                  <label ><?php echo get_phrase('Admin Image');?>*</label>        
                  <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                  <img id="blah" src="<?php echo $this->crud_model->get_image_url('admin', $row['admin_id']); ?>" alt="" height="200" width="200"/>
               </div>
            </div>
            <?php endforeach;?>
            <div>
               <button class="btn btn-add">Update Profile</button>
            </div>
            <?php echo form_close();?>
         </div>
      </div>
   </div>
   <div class="col-sm-5">
      <div class="panel panel-bd lobidrag">
         <div class="panel-heading">
            <div class="btn-group" id="buttonexport">
               <a href="#">
                  <h4><span><i class="fa fa-list" style="font-size: 20px;"></i></span> CHANGE PASSWORD</h4>
               </a>
            </div>
         </div>
         <div class="panel-body">
            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
            <form method="post" id="password" action="<?php echo base_url(); ?>admin/manage_profile/change_password">
            <div class="row">
            <div class="form-group col-lg-12">
                  <label><?php echo get_phrase('Password');?></label>
                  <input type="password" class="form-control" name="new_password" id="new_password" value="">
               </div>
                <div class="form-group col-lg-12">
                  <label><?php echo get_phrase('Confirm Password');?></label>
                  <input type="password" class="form-control" name="confirm_new_password" value="">
               </div>
            </div>
               
               
               <div >
                  <button class="btn btn-add">Change Password</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>