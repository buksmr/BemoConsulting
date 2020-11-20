<?php include ("header3.php"); ?>
<style>

</style>

<?php
		$res=$this->db->query("SELECT * FROM tbl_content_management where id=4")->row();
        // print_r($res);
         $content = $res->content;
 ?>

<div class="clearfix"></div>
<section class="project_opening_uploading_section">
   <div class="container-fluid">
      <div class="container">
      </div>
   </div>
</section>
<section class="project_form">
   <div class="container-fluid ">
   <div class="container">
		<div class="row row h-100 justify-content-center align-items-center">
			<form class="col-8 form-pro-lbl-section">
				<h2 class="donate_through">Press And News</h2>
				<div class="clearfix"></div>
                <?php echo $content;?>
				
        
		 

   
			</form>
        </div>
   </div>
</section>
<?php include ("footer.php"); ?>