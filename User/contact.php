<?php
$host="localhost";
$user="root";
$pass="";
$db="bd";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	echo "Not Connected With Database";
}

if (isset($_POST['submit'])) 
{
   $fname=$_POST['fname'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];
   $msg=$_POST['msg'];
   $timestamp = date("Y-m-d H:i:s");
   $qry="INSERT INTO `tblcontactusquery`(`Name`, `Email`, `Mobile`, `Message`, `PostingDate`) VALUES
   		('$fname','$email','$mobile','$msg','$timestamp')";
    // echo $qry;
    $res=mysqli_query($con,$qry);
      if($res)
    {
      echo "<script>alert('Message Send Successfully')</script>";
    }
    else
    {
      print_r($qry);
    }  
  }

?>
<!doctype html>
<html lang="en">
<?php
	include 'head.php';
?><body>
<div class="preloader"> 
	<figure>
	<img src="images/preloader.png" alt="Image"> 
		</figure>
		</div>
<!-- end preloader -->
<div class="page-transition"></div>
<!-- end page-transition -->	
<aside class="side-widget">
  <div class="inner">
    <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="Image"></a> </div>
    <!-- end logo -->
   <!-- end inner --> 
</aside>
<!-- end side-widget -->
<?php
  include 'navigation.php';
?><!-- end navbar -->
<header class="page-header" data-background="images/pic1.jpg">
	 <div class="container">
	<h2>CONTACT US</h2>
		 <p>Experience our revolutionary 30 Camp</p>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="content-section left-white-spacing" data-background="#fafafa">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
         <div class="section-title text-left">
		  <h2>WE'RE ALLWAYS <br>HAPPY
TO HELP</h2>
			 <p>If you have any questions or need any further information then please<br>
don’t hesitate to contact us.</p>
		  </div>
		  <!-- end section-title -->
		  <ul class="contact-box">
		  <li><h6>ADDRESS</h6> <span>YourGym Lytham Limited<br>
Units 1-3 Lytham Trade Park</span></li>
			  <li><h6>PHONE</h6> <a href="#">+1 653 5869</a></li>
			  <li><h6>E-MAIL</h6> <a href="#">hellow@quanca.co.uk</a></li>
			  
		  </ul>
      </div>
      <!-- end col-6 -->
		<div class="col-lg-6">
         <div class="contact-form">
			<form method="post">
			 <div class="form-group">
				<input type="text" name="fname" placeholder="Complete Name">
				</div>
				<!-- end form-group -->
			 <div class="form-group">
				<input type="Email" name="email"  placeholder="E-mail Address">
				</div>
				<!-- end form-group -->
			 <div class="form-group">
				<input type="text" name="mobile" placeholder="Phone Number">
				</div>
				<!-- end form-group -->
			 <div class="form-group">
				<textarea placeholder="Your Message" name="msg"></textarea>
				</div>
				<!-- end form-group -->
				<div class="form-group">
					<input type="submit"  name="submit" value="SEND MESSAGE">
				</div>
				<!-- end form-group -->
			 </form>
			</div>
			<!-- end contact-form -->
		</div>
      <!-- end col-6 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<div class="google-maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5015.549110977205!2d-0.13217353172342744!3d51.50825315347153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2zTG9uZHJhLCBCaXJsZcWfaWsgS3JhbGzEsWs!5e0!3m2!1str!2sde!4v1604897800505!5m2!1str!2sde" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<ul class="timetable">
			<li><span>MONDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			<li><span>TUESDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			<li><span>WEDNESDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			<li><span>THURSDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			<li><span>FRIDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			<li><span>SATURDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			<li><span>SUNDAY</span> <b> 06:00 AM - 21:00 PM</b></li>
			</ul>
</div>
	<!-- end google-maps -->
	<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4">
				<div class="logo">
				<img src="images/logo.png" alt="Image">
				</div>
				<!-- end logo -->
				<div class="footer-info">Lifting Training Center<br>
				<a href="#">View Information </a></div>
				<!-- end footer-info -->
				<ul class="footer-social">
        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
        <li><a href="#"><i class="lni lni-instagram"></i></a></li>
        <li><a href="#"><i class="lni lni-youtube"></i></a></li>
        <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
	</ul>
		</div>
      <!-- end col-3 --> 
			<div class="col-lg-4">
				<h6 class="widget-title">QUANCA CLUB</h6>
				<p>We match you with the trainer best equipped to help you meet your specific goals and preferences <u>Give yourself</u> the kit you need to leave your competition in the dust.</p><br>
				<a href="contact.html" class="custom-button">BECOME MEMBER</a>
		</div>
      <!-- end col-4 --> 
			<div class="col-lg-2 offset-xl-1 col-sm-6">
				<h6 class="widget-title">CAREERS</h6>
				<ul class="footer-menu">
					<li><a href="#">Receptionist</a></li>
					<li><a href="#">Become Trainer</a></li>
					<li><a href="#">Quanca Staff</a></li>
					<li><a href="#">Management</a></li>
					<li><a href="#">Finance</a></li>
				</ul>
		</div>
      <!-- end col-2 -->
			<div class="col-lg-2 col-sm-6">
				<h6 class="widget-title">MEMBERSHIP</h6>
				<ul class="footer-menu">
					<li><a href="#">Student Discount</a></li>
					<li><a href="#">Term Membership</a></li>
					<li><a href="#">Month-to-Month</a></li>
				</ul>
		</div>
      <!-- end col-2 -->
			<div class="col-12">
			<p class="copyright">© 2020 Quanca | Premium Gym Club</p>
			</div>
			<!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
	</footer>
	<!-- end footer -->

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/fancybox.min.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/odometer.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>