<?php include ("header4.php"); ?>



<section class="ProjectList">


	<div class="container">
                             <?php

                                if($this->session->flashdata('success'))

                                { ?>

                                <div class="col-sm-12 alert alert-success">

                                    <?php echo $this->session->flashdata('success'); ?>

                                </div>

                                <?php }

                                ?>
  <h2 class="meet_contactus">My Project</h2>
  <div class="clearfix"></div>

<div class="table-responsive-sm">
  <div class="tableMain">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Budget</th>
                <th>Expiration Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php //print_r($my_opening_proj_list);?>
          <?php $cnt=1; foreach ($my_opening_proj_list as  $value) { 
		    $cat_id =$value['category'];
			$res=$this->db->query("select category_name from tbl_category where id =$cat_id")->row();
			$category_name = $res->category_name;
		  ?>
            <tr>
                <td><?php echo $cnt++; ?></td>
				
				<?php if((isset($value['media_type'])) && ($value['media_type'] =='image')){ ?>
					<td><img src="<?php echo base_url(); ?>uploads/<?php echo $value['media']; ?>" class="proUpImg"></td>
				<?php } else{ ?>
					<td><img src="<?php echo base_url(); ?>assets/img/logo_footer.png" class="proUpImg"></td>
				<?php }?>
                
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $category_name; ?></td>
                <td><?php echo $value['budget']; ?></td>
                <td><?php echo $value['expiration_date_proj_opening']; ?></td>
                <td><?php if($value['status'] ==0 ){echo "In process";}else{echo "Completed";}?> <?php if($value['status'] ==0 ){ ?> <a href="<?php echo base_url(); ?>status_change_project_opening/<?php echo base64_encode($value['id']);; ?>/<?php echo base64_encode(1)?>" onclick="return confirm('Are you sure that your project opening has been completed? This can not be undone.');" ><button  class="btn btn-success">Complete</button></a> <?php } ?></td>
                

                <td>
                  <ul class="actionList">
                    <li><a href="<?php echo base_url(); ?>view_upload_proj_opening/<?php echo base64_encode($value['id']); ?>"><i class="fa fa-eye"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>edit_project_opening/<?php echo base64_encode($value['id']);; ?>"><i class="fa fa-edit"></i></a></li>
					
                    <li><a href="<?php echo base_url(); ?>delete_project_opening/<?php echo base64_encode($value['id']);; ?>" onclick="return confirm('Are you sure, that you would like to delete this project opening? Deleting a project opening is permanent.');"><i class="fa fa-trash" ></i></a></li>
					
                  </ul>				  
                </td> 
            </tr>
          <?php } ?>
            
          
          </tbody>

      </table>
</div><!-- tableMain -->

</div> <!-- responsive divs -->
    </div> <!-- container -->
   
    
   

</section>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php include ("footer.php"); ?>



 
 

