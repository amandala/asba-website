<?php /* Template Name: ASbA Contact */

get_header(); ?>

<?php
if(isset($_POST['submit'])){
    $to = "execdirector@albertabrewers.ca";
    $from = $_POST['email']; 
    $sendername = $_POST['sendername'];
    $subject = "New ASBA Contact Form Submission";
    $subject2 = "Copy of your inquiry to ASBA";
    $message = $sendername . " wrote the following:" . "\r\n\r\n" . $_POST['message'] .  "\r\n\r\n" ."Reply to: " . $from;
    $message2 = "Here is a copy of your message " . $sendername . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    if(isset($_POST['security']) && $_POST['security'] == 50){
    	wp_mail($to,$subject,$message,$headers);

    	wp_mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender

   		 echo "<div class='et_pb_row'>Mail Sent. Thank you " . $sendername . ", we will contact you shortly.</div>";
    	// You can also use header('Location: thank_you.php'); to redirect to another page.	
    }
    else {
    	echo "<div class='et_pb_row'><p class='contact-message'>We're sorry! There was a problem. Please check your answer to the security question and try again.</p></div>";
    }



    }
?>


<div class="et_pb_row">
	<div class="et_pb_column et_pb_column_2_3 et_pb_column et_pb_column_0">
		<h1>Get In Touch</h1>
		<form action="" method="post">
			<div class="et_pb_row no-pad">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column et_pb_column_0">
					<input type="text" name="sendername" placeholder="Name"><br>
				</div>
				<div class="et_pb_column et_pb_column_1_2 et_pb_column et_pb_column_1">
					<input type="text" name="email" placeholder="Email Address"><br>
				</div>
			</div>
			<div class="et_pb_row no-pad">
				<textarea class="message-area" rows="4" name="message" cols="30" placeholder="Message"></textarea><br>
			</div>
			<div class="et_pb_row no-pad">
				<div class="contact-submit-question">
				<span class="contact-form">5 x 10 = <input type="number" name="security"></span>

					<input type="submit" name="submit" value="Submit" id="contact-form-submit">

				</div>

			</div>

		</form>
	</div>

	<div class="et_pb_column et_pb_column_1_3 et_pb_column et_pb_column_1">
		<h1>Volunteer</h1>
		<p>The Alberta Small Brewers Association is a not-for-profit organization that is entirely volunteer run and from time to time we are looking for help. If you love Alberta beer, and want to see a vibrant craft beer scene here in the province then you've found the right place!</p>
		<p>We are looking from some help from:
		<ul>
			<li class="volunteer">Graphic Designers</li>
			<li class="volunteer">Web Developers</li>
			<li class="volunteer">Community Managers</li>
			<li class="volunteer">Social Media Mavens</li>
			<li class="volunteer">PR Professionals</li>
			<li class="volunteer">Photographers</li>
			<li class="volunteer">Videographers</li>
			<li class="volunteer">Anyone that can help get the word out!</li>
		</ul>
		</p>
	</div>
</div>


<?php get_footer(); ?>