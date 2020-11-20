<?php include ("header3.php"); ?>
<style>
form.col-12.form-pro-lbl-section {
    background-color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
    position: relative;
    top: -161px;
    padding: 45px;
}
</style>

<?php
		$res=$this->db->query("SELECT * FROM tbl_content_management where id=2")->row();
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
   <div class="container">
		<div class="row row h-100 justify-content-center align-items-center">
			<form class="col-12 form-pro-lbl-section termsEditore">
				<h2 class="donate_through">Terms And Services</h2>
				<div class="clearfix"></div>
                <?php echo $content ? $content : ''; ?>
   
			</form>
        </div>
   </div>
</section>

<?php include ("footer.php"); ?>