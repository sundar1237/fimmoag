<?php
include 'includes/cons.php';
?>
<!doctype html>
<html lang="en">
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<?php
	 $map="#map {
	height: 400px; /* The height is 400 pixels */
	width: 100%; /* The width is the width of the web page */}";
	echo getHead("Kontakt", "", $map);?>
</head>
<body>
	<main role="main">
	<?php echo getNavigationMenu(); ?>
	
  		<div class="container marketing">
			<div class="blog-post">
				
				<div class="container">
			<?php
if (SEND_MAIL ==TRUE && isset($_POST['message'])) {
    include 'funcs/Utils.php';
    sendMail();
    echo '<div class="row">
            <div class="col-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Thanks for contacting us!</strong> We will contact you soon.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            </div>
         </div>';
}
?>
			<div class="row" style="margin-top: 50px;">
				<div class="col-12 py-5 jumbotron">
					<h1 class="display-4">Contact Us</h1>
					<?php getAddressBar(); ?>
				</div>
			</div>
			<!-- row-->
			<div class="row">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.0370368365566!2d7.412212215607526!3d46.94131117914617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e3907224041b3%3A0xa7e8cb8dbdf3f1ab!2sFischerm%C3%A4ttelistrasse%205%2C%203008%20Bern!5e0!3m2!1sen!2sch!4v1600442906427!5m2!1sen!2sch" 
				width="1110" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				
			</div>
		</div>
		<!-- container-->


	<?php if (SEND_MAIL==True){?>
		<div class="container"
			style='margin-top: 10px; background-color: #f2f2f2;'>
			<h1 class="display-4">Reach Us</h1>						
			<div class="row">
				<div class="col-sm"></div>
				<div class="col-sm" style='margin: 10px 10px 10px 10px;'>
					
					<form action="contact.php" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">First Name *</label> <input
								type="text" name="first_name" class="form-control" id="exampleInputEmail1"
								aria-describedby="emailHelp" placeholder="first name" required> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2">Last Name *</label> <input
								type="text" name="last_name" class="form-control" id="exampleInputEmail2"
								aria-describedby="emailHelp" placeholder="last name" required> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail3">Mobile Number *</label> <input
								type="number" name="mobile_no" class="form-control" id="exampleInputEmail3"
								aria-describedby="emailHelp" placeholder="mobile number" required> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail4">Email </label> <input
								type="email" name="email" class="form-control" id="exampleInputEmail4"
								aria-describedby="emailHelp" placeholder="Email"> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail5">Message *</label> <textarea  minlength="8"  maxlength="200" id="exampleInputEmail5" class="form-control" name="message" rows="" cols="" required></textarea> 
						</div>
						<div class="g-recaptcha" data-sitekey="6LceUssZAAAAAEL8JIIF-2SkVGlfZysN5yt4HYPS"></div>						
						<button type="submit" class="btn btn-primary" style='float: right;'>Submit</button>
					</form>
				</div>
				<div class="col-sm"></div>
			</div>
		</div>
	<?php }?>

				
			</div>
			<!-- /.blog-post -->
		</div>
		<!-- /.container -->
	<?php echo getFooter(); ?>	
  	<?php echo getJsLinks("") ?>
</main>
</html>
