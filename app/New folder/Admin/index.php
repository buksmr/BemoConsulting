<?php include ("header.php"); ?>
<div class="main-container ace-save-state" id="main-container">
<script type="text/javascript">
  try{ace.settings.loadState('main-container')}catch(e){}
  
</script>
<!--============ Sidebar Satrt Here============-->
<?php include ("sidebar.php"); ?>
<!--============ Sidebar END Here============-->

<?php
	$queryuser=$this->db->select("count(id) as usercount")->from('tbl_user')->where('is_delete',0)->get();
    $user=$queryuser->row();
	$usercount = $user->usercount;
	
	$query_project=$this->db->select("count(id) as projectcnt")->from('tbl_upload_project')->where('is_delete',0)->get();
    $project=$query_project->row();
	$projectcnt = $project->projectcnt;
	
	$query_project_op=$this->db->select("count(id) as projectopeningcnt")->from('tbl_upload_project_opening')->where('is_delete',0)->get();
    $projectop=$query_project_op->row();
	$projectopeningcnt = $projectop->projectopeningcnt;
	
	$query_review=$this->db->select("count(id) as reviewcount")->from('tbl_review')->where('is_deleted',0)->get();
    $review=$query_review->row();
	$reviewcount = $review->reviewcount;

	$query_review1=$this->db->select("count(order_id) as paymentcount")->from('tbl_orders')->where('is_deleted',0)->get();
    $payment=$query_review1->row();
	$paymentcount = $payment->paymentcount;

	
			

?>

<div class="main-content">
  <div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
      <ul class="breadcrumb">
        <li>
          <i class="ace-icon fa fa-home home-icon"></i>
          <a href="#">Home</a>
        </li>
        <li class="active">Dashboard</li>
      </ul>
      <!-- /.breadcrumb -->
    </div>
    <div class="page-content">
      <div class="page-header">
        <h1>
          Dashboard
          <small>
          <i class="ace-icon fa fa-angle-double-right"></i>
          overview &amp; stats
          </small>
        </h1>
      </div>
      <!-- /.page-header -->
      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <div class="row">
            <div class="space-6"></div>
            <div class="col-sm-12 infobox-container">
              <div class="infobox infobox-green">
                <div class="infobox-icon">
                  <i class="ace-icon fa fa-users"></i>
                </div>
                <div class="infobox-data">
                  <span class="infobox-data-number"><?php echo $usercount;?></span>
                  <div class="infobox-content">Total Users</div>
                </div>
              </div>
              <div class="infobox infobox-blue">
                <div class="infobox-icon">
                  <i class="ace-icon fa fa-user"></i>
                </div>
                <div class="infobox-data">
                  <span class="infobox-data-number"><?php echo $projectcnt;?></span>
                  <div class="infobox-content">Total Gigs</div>
                </div>
              </div>
              <div class="infobox infobox-pink">
                <div class="infobox-icon">
                  <i class="ace-icon fa fa-edit"></i>
                </div>
                <div class="infobox-data">
                  <span class="infobox-data-number"><?php echo $projectopeningcnt;?></span>
                  <div class="infobox-content">Total Project</div>
                </div>
              </div>
              <div class="infobox infobox-red">
                <div class="infobox-icon">
                  <i class="ace-icon fa fa-check"></i>
                </div>
                <div class="infobox-data">
                  <span class="infobox-data-number"><?php echo $reviewcount;?></span>
                  <div class="infobox-content">Total Reviews</div>
                </div>
              </div>
              <div class="infobox infobox-orange2">
                <div class="infobox-chart">
                  <span class="chart-imagesss">
                    
                    <img src="<?php echo base_url(); ?>admin_assets/images/bar.png">
                  </span>
                </div>
                <div class="infobox-data">
                  <span class="infobox-data-number"><?php echo $paymentcount;?></span>
                  <div class="infobox-content">Total Orders</div>
                </div>
              </div>
              <div class="space-6"></div>
              <!--<div class="infobox infobox-green infobox-small infobox-dark">
                <div class="infobox-progress">
                  <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                    <span class="percent">61</span>%
                  </div>
                </div>
                <div class="infobox-data">
                  <div class="infobox-content">Title</div>
                  <div class="infobox-content">Completion</div>
                </div>
              </div>
              <div class="infobox infobox-blue infobox-small infobox-dark">
                <div class="infobox-chart">
                  <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                </div>
                <div class="infobox-data">
                  <div class="infobox-content">Title</div>
                  <div class="infobox-content">$32,000</div>
                </div>
              </div>
              <div class="infobox infobox-grey infobox-small infobox-dark">
                <div class="infobox-icon">
                  <i class="ace-icon fa fa-download"></i>
                </div>
                <div class="infobox-data">
                  <div class="infobox-content">Title</div>
                  <div class="infobox-content">1,205</div>
                </div>
              </div>-->
            </div>
            <div class="vspace-12-sm"></div>
          </div>
          <!-- /.row -->
          <div class="hr hr32 hr-dotted"></div>
          <!-- PAGE CONTENT ENDS -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.page-content -->
  </div>
</div>
<!-- /.main-content -->
<?php include ("footer.php"); ?>