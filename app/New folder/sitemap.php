<?php include ("header3.php"); ?>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sitemap.css">



<section class="site-divs">
	<div class="container sitmapscontainer">
		 
       <div class="section row">

	    <p><a href="<?php echo base_url(); ?>">Home page</a></p>
		<div class="col-md-4">
            <div class="sec-first">   
			<a href="<?php echo base_url(); ?>">Freelancebit</a>
		    </div>
		</div>    

		<div class="col-md-4">
			 <div class="sec-first"> 
			<a href="<?php echo base_url(); ?>login">Login</a>

		 </div>
        </div>

        <div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>freelancer_project_opening">Freelancer Project Opening</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>donate">Donate</a></div></div>

		<div class="col-md-4"><div class="sec-first"><a href="<?php echo base_url(); ?>about_us">About Us</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>press_and_news">Press & News</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>terms_services">Terms Of Service</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>contact_us">Contact Us</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>blog/new-blogs/">Blogs</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>blog/">freelancebit.com/blog/</a></div></div>





<?php
$main_category=$this->Front_model->get_category_list();
foreach ($main_category as $value) { 
?>
<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>marketplace/<?php echo $value['category_alias']; ?>"><?php echo $value['category_name']."<br>"; ?></a></div></div>
 <?php
                $sub_category = $this->Front_model->get_sub_category_list($value['id']);
                foreach ($sub_category as $value2) {
                    ?>
                    <div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>marketplace/<?php echo $value['category_alias']; ?>/<?php echo $value2['sub_cat_alias']; ?>"><?php echo $value2['sub_cat_name'] . "<br>"; ?></a></div></div>      
                <?php } ?>
<?php }
?>





<?php
$uplod_project=$this->Front_model->get_sitemap_uplod_proj();
foreach ($uplod_project as $value) { 
	$trimname =trim($value['title']);
	$title = str_replace(' ', '-', $trimname);
?>
<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>project_details/<?php echo base64_encode($value['id']); ?>/<?php echo $title ;?>"><?php echo $value['title']."<br>"; ?></a></div></div>
<?php }
?>



<?php
$uplod_project_opening=$this->Front_model->get_sitemap_uplod_proj_opening();
foreach ($uplod_project_opening as $value) { 
	$trimname =trim($value['title']);
	$title = str_replace(' ', '-', $trimname);
?>
<div class="col-md-4"> <div class="sec-first"> <a href="<?php echo base_url(); ?>freelancebit_project_opening_details/<?php echo base64_encode($value['id']); ?>/<?php echo $title;?>"><?php echo $value['title']."<br>"; ?></a></div></div>
<?php }
?>





<!-- 
		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/MQ==/Writing_&_Translation">Writing &amp; Translation</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/Mg==/Graphics_&_Design">Graphics &amp; Design</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/Mw==/Business">Business</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/NA==/Digital_Marketing">Digital_Marketing</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/NQ==/Video_&_Animation">Video &amp; Animation</a></div></div>

		<div class="col-md-4"> <div class="sec-first"><a href="https://freelancebit.com/marketplace/Ng==/Programming_&_Tech">Programming &amp; Tech</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/Nw==/Music_&_Audio">Music &amp; Audio</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/marketplace/OA==/Fun_&_Lifestyle">Fun &amp; Lifestyle</a></div></div>



 -->




<!-- 

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/Mg==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/NA==">Freelancebit</a></div>
        </div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/MQ==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/NQ==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/Nw==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/Ng==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/Mw==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelance_marketplace/OA==">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/blog/news/">NEWS</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/NzQ=/Jan">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/NTQ=/Freelancebit">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/MQ==/MTI1">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/MQ==/MTI2">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/Mg==/MTI3">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/Mw==/MTI4">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/NA==/MTI5">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/NQ==/MTMw">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/Ng==/MTMx">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/Nw==/MTMy">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancer_project_opening/OA==/MTMz">Freelancebit</a></div></div>


 -->












<!-- 
		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/MzU=/Market-Tycoon">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/MzY=/MEANDERS-Game">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/Mzc=/MEANDERS-Steam-Store-Page">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/Mzg=/MEANDERS-In-game-Achievements">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/Mzk=/Overchunked-Game">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/NDA=/Overchunked-Steam-Store-Page">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_project_opening_details/NDE=/Antirocketh-Game">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/MQ==/MQ==/Writing_&_Translation">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/MQ==/MTA=/Writing_&_Translation">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/Mg==/NDE=/Graphics_&_Design">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/Mw==/MjI=/Business">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/NA==/MjM=/Digital_Marketing">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/NQ==/NzE=/Video_&_Animation">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/Ng==/NjI=/Programming_&_Tech">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/Nw==/NDg=/Music_&_Audio">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/gig_marketplace/OA==/MzA=/Fun_&_Lifestyle">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/login_main">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MzU=/Illustrations-for-Children's-Book">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MjY=/Danish-to-English-Translation-and-Vice-Versa-of-Any-Type-of-Text">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/Mjg=/Catalan-Translation">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MzI=/English-to-polish-translation">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MzQ=/English-to-Turkish-and-Turkish-to-English-Translation">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MzY=/Bangla-Translator">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MzM=/I-Will-Beta-Test-Any-Product">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/project_details/MjQ=/Real-Stream-Viewer-and-Engagement">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/NzQ=/Juan_Saenz">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/NTM=/Victor_Fisker">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/ODA=/Dominik_Stok%C5%82osa">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/NTc=/H._Serhat_%C3%87avunt">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/OTU=/Danai_Best">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/freelancebit_profile_new/MTA5/M.R_Hasan">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/Front/login_main/freelancer_uploading_project">Freelancebit</a></div></div>

		<div class="col-md-4"> <div class="sec-first"> <a href="https://freelancebit.com/Front/login_main/freelance_uploading_opening_project">Freelancebit</a>
		</div></div>


 -->








		 



	</div> <!--  sitmapscontainer      -->








</section>





<?php include ("footer.php"); ?>