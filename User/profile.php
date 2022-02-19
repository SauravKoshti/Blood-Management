<?php
    //include 'connection.php';
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
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $BloodGroup=$_POST['blood_group'];
   $address=$_POST['address'];
   $msg=$_POST['msg'];
  
    $qry="UPDATE `tblblooddonars` SET `Name`='$fname', `Mobile`='$mobile', `Email`='$email', 
    `Gender`='$gender',`BloodGroup`='$BloodGroup', `Age`='$age', `Address`='$address', `Message`='$msg' WHERE id='$id' ";
    $res=mysqli_query($con,$qry);
      if($res)
    {
      echo "<script>alert('Profile Updated Successfully')</script>";
    }
    else
    {
      echo $qry;
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
<header class="page-header" data-background="images/sign-in-removebg-preview.png" >
	 <div class="container">
	<h2>Profile</h2>
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
		<?php
                $i=0;
                    $qry="SELECT * FROM `tblblooddonars`";
                    $res=mysqli_query($con,$qry);
                   	$raw=mysqli_fetch_array($res)

                ?>
		<div class="col-sm-3">
         <div class="contact-form">
			<form method="post">
			 	<div class="form-group">
			 			<label>Name</label>
					<input type="text" name="fname" placeholder=" Enter Complete Name" value=" <?php echo $raw['Name']; ?>">
				</div>

				<!-- end form-group -->
				
				 <div class="form-group">
				 		<label>Mobile</label>
					<input type="text" name="mobile" placeholder="Enter Phone Number" value="<?php echo $raw['Mobile']; ?>">
				</div>
				<!-- end form-group -->
				 <div class="form-group">
				 		<label>Email</label>
					<input type="email" name="email" placeholder="Enter Your Email" value=" <?php echo $raw['Email']; ?>">
				</div>
				<!-- end form-group -->
				<div class="form-group">
						<label>Age</label>
					<input type="text" name="age" placeholder="Enter Age" value=" <?php echo $raw['Age']; ?>">
				</div>
				<!-- end form-group -->
				<div class="form-group">
						<label>Gender</label>
                      <select name="gender" value="<?php echo $raw['Gender']; ?>">
                      <option value="">Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      </select>
                 </div>
				<!-- end form-group -->
				<div class="form-group">
					  <label>Blood Group</label>
                      <select name="blood_group"  >
                      <option value="">Select</option>
                      <?php
                         
                           $qry="SELECT * FROM `tblbloodgroup`";
                           $res=mysqli_query($con,$qry);
                           while($raw=mysqli_fetch_array($res))
                           {  ?>
                            <option value="<?php echo $raw['BloodGroup']; ?>"><?php echo $raw['BloodGroup']; ?></option>
                           <?php } ?>
                      </select>
                 </div>
				<!-- end form-group -->
				<div class="form-group">
			 		<label>Address</label>
					<textarea placeholder="Your Address" name="address" value="<?php echo $raw['Address']; ?>">
                  			
                  	</textarea>
				</div>
				<!-- end form-group -->
				<div class="form-group">
			 		<label>Message</label>
					<textarea placeholder="Your Message" name="msg">
						  <?php echo $raw['Message']; ?>
					</textarea>
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

	<!-- end google-maps -->
	<?php 
		include 'footer.php';
	?>
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