
<!-- start of chat module -->

<style type="text/css">

.mck-btn {
    display: none;
    }
    #mck-sidebox-launcher{
    display: none;
    }
</style>



<?php
$login_user_id=$this->session->userdata('user_login');

if($login_user_id)
{


 $user_data = $this->Front_model->get_login_user_profile();
 $receivers_list=$this->Front_model->get_receivers_list();
 //echo "<pre>";print_r($receivers_list);
 foreach ($receivers_list as$value) {

 ?>
 <input type="hidden" id="imag_link<?php echo $value['userId']; ?>" value="<?php  echo $value['imageLink']; ?>" name="">
 <?php
 }
?>
  <section id="login" class="main-block bg-F1F4F9">
        <div class="container">
          
            <div class="row">
                <form id="login-form" class="ph35">
                    <div class="form-group">
                        <input type="hidden" title="Enter your application id here. You can generate application Id from applozic Dashboard." class="form-control" id="applicationId" name="applicationId" placeholder="applozic-sample-app" value="freelancebit8f7bff4d1f95b6202bbbd35acc0eaee9" required="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="loginId" name="loginId" placeholder="Email *" value="<?php echo $user_data->email_id; ?>"  pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$" required="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password *" value="<?php echo $this->encryption->decrypt($user_data->password); ?>"   required="" Click me.>
                    </div>
                    <p id="login-response" class="hide response text-center mb-15"></p>
                   <!--  <div id="login-spinner" class="form-group text-center hide">
                        <i class="fa fa-spin fa-spinner fa-lg"></i>
                    </div> -->
                    <!-- <div class="form-group mb-15">
                        <button id="login-submit" type="button" class="btn btn btn-green w-full pd-12 btn-submit"
                        value = "" Click me.>
                            <strong>Enter Chat</strong>
                        </button>
                    </div> -->
                </form>
                <div id="success-text" class="n-vis">
                    <!-- <p>Welcome to Applozic</p> -->
                    <!-- <button id="logout" type="button" class="btn btn btn-green w-full pd-12 btn-submit" value="Click me"> -->
                        <!-- <strong>Logout</strong> -->
                    <!-- </button> -->
                </div>
            </div>
        </div>
  </section>
<!-- <style type="text/css">
  #mck-sidebox{
display: none;
  }
</style> -->
<script type="text/javascript">
  var ENV_URL= "https://apps.applozic.com";
  getUserData();


function getUserData() { //loadScript();
    //pass user login credentials to chat plugin script
    var appId = document.getElementById("applicationId").value;
    var userId = document.getElementById("loginId").value;
    var pass = document.getElementById("loginPassword").value;
    intializeChat(appId, userId, pass);
}
function logout() {
    $applozic.fn.applozic('logout');
    location.reload();
    /*document.getElementById("login-form").classList.remove('n-vis');
    document.getElementById("login-form").classList.add('vis');
    document.getElementById("success-text").classList.add('n-vis');
    document.getElementById("success-text").classList.remove('vis');*/
}

 //this method logs in a user.
   var receivers_list ='<?php  echo json_encode($receivers_list); ?>';
    console.log(receivers_list);
function intializeChat(appId, userId, pass) {

    var contactsJSON=receivers_list;
   

    (function(d, m) {
        var s, h;
        s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = ENV_URL+"/sidebox.app";
        h = document.getElementsByTagName('head')[0];
        h.appendChild(s);
        window.applozic = m;
        m.init = function(t) { m._globals = t; }
    })
    (document, window.applozic || {});

    window.applozic.init({
        baseUrl : ENV_URL,
        appId: 'freelancebit8f7bff4d1f95b6202bbbd35acc0eaee9',//appId, //Get your application key from https://www.applozic.com
        userId: userId, //Logged in user's id, a unique identifier for user
        userName: '', //User's display name
        imageLink: '', //User's profile picture url
        email: '', //optional
        contactNumber: '', //optional, pass with internationl code eg: +13109097458
        desktopNotification: true,
        source: '1', // optional, WEB(1),DESKTOP_BROWSER(5), MOBILE_BROWSER(6)
        notificationIconLink: 'https://www.applozic.com/favicon.ico', //Icon to show in desktop notification, replace with your icon
        authenticationTypeId: 1, //1 for password verification from Applozic server and 0 for access Token verification from your server
        accessToken: pass, //optional, leave it blank for testing purpose, read this if you want to add additional security by verifying password from your server https://www.applozic.com/docs/configuration.html#access-token-url
        locShare: true,
        //   emojilibrary: true, // true if you want to load emoticons in chat
        googleApiKey: "AIzaSyDKfWHzu9X7Z2hByeW4RRFJrD9SizOzZt4", // your project google api key
        googleMapScriptLoaded: false, // true if your app already loaded google maps script
        //   mapStaticAPIkey: "AIzaSyCWRScTDtbt8tlXDr6hiceCsU83aS2UuZw",
        autoTypeSearchEnabled: true, // set to false if you don't want to allow sending message to user who is not in the contact list
        loadOwnContacts: true, //set to true if you want to populate your own contact list (see Step 4 for reference)
        olStatus: false, //set to true for displaying a green dot in chat screen for users who are online
        onInit: function(response) {
      
            if (response === "success") {

                // document.getElementById("login-form").classList.add('n-vis');
                // document.getElementById("success-text").classList.add('vis');
                // document.getElementById("success-text").classList.remove('n-vis');

                // $applozic.fn.applozic('loadTab', '');
                // $applozic.fn.applozic('loadContacts', { "contacts": contactsJSON });
                // login successful, perform your actions if any, for example: load contacts, getting unread message count, etc
            } else {
                // alert('else');
                // error in user login/register (you can hide chat button or refresh page)
            }
        },
        contactDisplayName: function(otherUserId) {
            // alert('otherUserId1'+otherUserId);//insert user in tbl_chat_history
            //alert(otherUserId);
            //alert(userId);
            // if (otherUserId != userId ) {

            //   alert('not same');
              
            // }

           
            //return the display name of the user from your application code based on userId.
            return "";
        },
        contactDisplayImage: function(otherUserId) {
          var image_value = document.getElementById("imag_link"+otherUserId).value;

        if(image_value){
         return "<?php echo base_url(); ?>/profile_image/"+image_value;             
            //return the display image url of the user from your application code based on userId.
        }else{
         // return "http://localhost/live_freeliancebit/profile_image/"+image_value;             

        }
           
        },
        onTabClicked: function(response) {
             $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>Front/insert_in_chat_history",
            data: {email_id:response.tabId},
            success : function(data){
                
            }
           });

            // alert(response);
            // alert(response.tabId);
            // write your logic to execute task on tab load
            //   object response =  {
            //    tabId : userId or groupId,
            //    isGroup : 'tab is group or not'
            //  }
        }
    });
}
</script>
<!-- end of chat module -->
<?php
}//if login
?>

<footer>
  <div class="mainfooter">
<?php
 $all_category=$this->Front_model->get_all_category();
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h4 >CATEGORIES</h4>
        <div class="row">
          <?php $counter=0;
           foreach ($all_category as  $value) {
            // echo $counter;
                  //$categoryname = str_replace(' ', '_', $value['category_name']);
            
            if($counter <= 4){
              $add_class="";
              $add_class2="footerlink1";

            }else{
              $add_class="footerlink";
              $add_class2="footerlink1";

            }
            ?>
            <?php if($counter == 0 || $counter == 4){?>
          <div class="col-sm-6 <?php echo $add_class; ?>">
            <ul class="list-unstyled <?php echo $add_class2; ?>">
            <?php }  ?>

              <li><a href="<?php echo base_url();?>marketplace/<?php echo $value['category_alias']; ?>"><?php echo $value['category_name']; ?></a></li>

             <!--  <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(4)?>">Digital Marketing</a></li>
              <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(1)?>">Writing & Translation</a></li>
              <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(5)?>">Video & Animation</a></li> -->

            <?php if($counter == 3 || $counter == 7){?>
            </ul>
          </div>
            <?php }  ?>


           <?php  $counter++;
         }
          ?>
        <!--   <div class="col-sm-6 footerlink">
              <ul class="list-unstyled footerlink1">
              <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(7)?>">Music & Audio</a></li>
              <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(6)?>">Programming & Tech</a></li>
              <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(3)?>">Business</a></li>
              <li><a href="<?php echo base_url();?>marketplace/<?php echo base64_encode(8)?>">Fun & Lifestyle</a></li>
            </ul>
          </div> -->

        </div> <!-- rows -->
      </div> <!-- sm-5 -->

     
     <div class="col-sm-7">
      <div class="row">
      <div class="col-sm-4">
        <h4>SERVICES</h4>
        <ul class="list-unstyled">
          
        <li><a href="<?php echo base_url(); ?>upload_project">Upload Gig</a></li>
        <li><a href="<?php echo base_url(); ?>upload_project_opening">Upload Project</a></li>
        
        
        
        <li><a href="<?php echo base_url(); ?>donate">Donate</a></li>
        <li><a href="<?php echo base_url(); ?>Front/sitemap">Sitemap</a></li>
        </ul>
      </div> <!-- sm-3 -->

      <div class="col-sm-3">
        <h4>ABOUT</h4>
        <ul class="list-unstyled">
          
         <li><a href="<?php echo base_url(); ?>about_us">About Us</a>
        </li>

        <!--<li><a href="<?php echo base_url(); ?>press_and_news">Press & News</a></li>-->


        <li><a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a></li>
        <li><a href="<?php echo base_url(); ?>terms_services">Terms of Service</a></li>
        <li><a href="<?php echo base_url(); ?>contact_us">Contact Us</a>
        </li>
         <li><a href="<?php echo base_url(); ?>blog/new-blogs/" target="_blank">Blog</a>
        </li>
      </ul>
      </div> <!-- sm-3 -->

      <div class="col-sm-4">
        <h4>SOCIAL LINKS</h4>
        <!-- <ul class="list-unstyled"> -->
          
         <!-- <li> --><a href="http://linkedin.com/company/freelancebit" target="_blank"class="fa-customize">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
         </a>
        <!-- </li> -->
<!-- 
        <li> --><a href="https://www.instagram.com/freelancebit/" target="_blank"class="fa-customize">
          
           <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <!-- </li> -->

        <!-- <li> --><a href="https://www.youtube.com/channel/UCjRmGCykeaDGXOgu5LxRkrg" 
          target="_blank" class="fa-customize">
          
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <!-- </li> -->

         <!-- <li> --><a href="https://discord.gg/UN7mEnr" 
          target="_blank" class="fa-customize">
          
             <img src="<?php echo base_url(); ?>assets/img/discord-first.png" class="discords-img" alt="">
            </a>
        <!-- </li> -->

        
      <!-- </ul>   -->



      </div> <!-- sm-4 -->  


    </div> <!-- rows -->
</div> <!-- 7 -->





    </div>
  </div>
  </div>

  <div class="container">
    <div class="footer-copy-txts">
    <div class="row">
      <div class="col-sm-6">
        <p class="copy-rights-txts">Copyrights &copy; 2020 <span style="color: #1b5ca0;font-weight: bold;">Freelancebit.</span> All rights reserved.</p>
      </div>


      <div class="col-sm-6 ftrLogo">
        <img src="<?php echo base_url(); ?>assets/img/logo_footer.png" width="60" height="60" />
      </div>


    </div> <!-- rows -->
    </div> <!--footer-copy-txts -->
  </div>
</footer>


</div><!-- wrapper -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"></script>
<script>
     $('.flexslider').flexslider({
  animation: "slide",
  animationSpeed: 300,
  slideshowSpeed: 7000,
  controlNav: false
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!--
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select-country.min.js" type="text/javascript"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script> -->







<script type="text/javascript">
   $(document).ready(function() {
       $("#forgotBtn").click(function(){
             $("#forgrt_email_pwd").show();
             $(".loginMaindiv").hide();
        });
     });     
     
</script> 

<script>
 
 /* first carousel slidesshow */
 $('#demo').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
 /* second carousel slidesshow */
 $('#demoportfolio').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
 /* third carousel slidesshow */
 $('#Recentdemo').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
 /* four carousel slidesshow */
 $('#Referenceslide').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
 </script>


<script>
 
 /* first carousel slidesshow */
 $('#RecentReviews').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
 /* second carousel slidesshow */
 $('#PositiveReviews').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
  $('#NegativeReviews').carousel({
      data-interval: 3000,
    data-ride="carousel"
      pause: "hover",
      wrap: true,
     keyboard: true
 });
 
 
 
 </script>

<script>
$(function () {
  $(".datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
         

  }).datepicker('update', new Date());
   


});
</script>

<script>
$(function () {

  var date = new Date();
date.setDate(date.getDate());

  $(".datepickernews").datepicker({ 
        autoclose: true, 
        startDate: date

  })
   


});
</script>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
</script>


<script src="<?php echo base_url(); ?>assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>





<script>
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 740;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>

   
  <script type="text/javascript">jssor_1_slider_init();</script>

</body>
</html>