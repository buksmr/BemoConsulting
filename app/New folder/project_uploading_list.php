<?php include ("header3.php"); ?>

<?php
		$user_id= $_SESSION['user_login'];
		$idsnew = array();
		$query=$this->db->query("SELECT id FROM `tbl_upload_project` where user_id = $user_id");			
		$res=$query->result_array();
		if(count($res) > 0){
				foreach($res as $list){
					$pro[] =$list['id'];
				}
			if(!empty($pro)){			
				$ids= implode(",",$pro);  
				if(!empty($ids)){
					$query2=$this->db->query("SELECT user_id FROM `tbl_orders` where project_id IN($ids) group by user_id");			
					$res2=$query2->result_array();
					if(count($res2) > 0){
						foreach($res2 as $data){
							$userids[] =$data['user_id'];
						}
						if(!empty($userids)){
							$idsnew= implode(",",$userids);

							if(!empty($idsnew)){
								$query3=$this->db->query("SELECT id,first_name,last_name,email_id FROM `tbl_user` where id IN($idsnew)");			
								$userlist=$query3->result_array();
							}							
						}
					}
					
				}	
			}	
		}
		//print_r($userlist);

?>

<section class="ProjectList">

                               <?php

                                if($this->session->flashdata('success'))

                                { ?>
                                <div class="container">
                                <div class="col-md-12 col-md-offset-3 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>
                                </div>
                                <?php }

                                ?>
	<div class="container">
  <h2 class="meet_contactus">My Gigs</h2>
  <div class="clearfix"></div>

  <div class="tableMain-projects table-responsive-sm">
  <table id="example" class="table table-striped table-projects-bordered" 
  style="width:100%">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Descripton</th>
                <th>Action</th>
                <th>Invite</th>
            </tr>
        </thead>
        <tbody>
          <?php $cnt=1; foreach ($my_upload_proj_list as  $value) { 
		  
		  
		  
		  ?>
            <tr>
                <td><?php echo $cnt++;  ?></td>
				
				<?php if((isset($value['media_type'])) && ($value['media_type'] =='image')){ ?>
					<td><img src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" class="proUpImg"></td>
				<?php } else{ ?>
					<td><img src="<?php echo base_url(); ?>assets/img/logo_footer.png" class="proUpImg"></td>
				<?php }?>
                
				
                <td><?php echo $value['title']; ?></td>
                <td><div class="uploading-projects"><?php echo $value['description']; ?>
                	
                </div></td>
                <td class="actioncls">
                  <ul class="actionList">
                    <li><a href="<?php echo base_url(); ?>view_uploading_project/<?php echo base64_encode($value['id']); ?>"><i class="fa fa-eye"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>edit_uploading_project/<?php echo base64_encode($value['id']); ?>"><i class="fa fa-edit"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>delete_uploading_project/<?php echo base64_encode($value['id']); ?>" onClick="return confirm('are you sure you want to delete??');"><i class="fa fa-trash"></i></a></li>
                  </ul>
                </td> 
				
				 <td>
				 <form action="<?php echo base_url(); ?>invite" method="post" class="inviteform">
				  <?php $trimname =trim($value['title']);
				  $title = str_replace(' ', '-', $trimname);?>
				    <input type="hidden" value="<?php echo base_url();?>project_details/<?php echo base64_encode($value['id']); ?>/<?php echo $title;?>" name="invite_url">
				     <select name="email_id" id="email_id" required >
						<option value="">Select</option>
						<?php if(count($userlist) > 0){
							
							foreach($userlist as $list){ ?>
							 <option value="<?php echo $list['email_id'];?>"> <?php echo $list['first_name'] ." ". $list['last_name']?> </option>
						<?php }  } ?>
					 
				     </select>
				 
				 
				 <button class="btn btn-success invitebtn" type="submit">Invite</button>
				 </form>
				 </td>
            </tr>
          <?php } ?>
            
          
          </tbody>

      </table>
</div><!-- tableMain -->
    </div> <!-- container -->
   
    
   

</section>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php include ("footer.php"); ?>



 
 

