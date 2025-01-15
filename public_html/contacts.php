<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'CONTACT';
?>
<?php include('templates/header.php');?>        
<div class="innerbanner" >                
	<img src="" alt="">        
</div>
<div class="container content-area">
    <div class="middle-align">
        <div class="site-main sitefull contactpanel">         
			<header class="entry-header">
				<h1 class="entry-title">Contact Page</h1>
			</header><!-- .entry-header -->                                    
			<p style="font-size:18px;text-align:justify;">
				We are happy to answer any question you have. Just send us an 
				email in the form below with any question you may have.</p>          
			<div class="clear space40"></div>   
			<div class="one_half">
		<h2 class="section_title">Contact Details</h2>
		<div class="m-add-info">
				<i class="fas fa-map-marker-alt"></i>				
				<div class="m-addbox">					
					<p style="font-size:18px;text-align:justify;">Wabigalo Kikuumambogo, <br> Postal Adress 418, Mityana, <br>Uganda -East Africa.</p>
				</div>
		</div>
		<div class="m-add-info">
				<i class="fas fa-phone-square"></i>				
				<div class="m-addbox">					
					<p style="font-size:18px;text-align:justify;">+256 771 866 432</p>
				</div>
		</div>
		<div class="m-add-info">
				<i class="fas fa-envelope"></i>				
				<div class="m-addbox">					
					<p style="font-size:18px;text-align:justify;">kaye.samuel@yahoo.com, <br> info@gracechristianfellowshipchurchuganda.com </p>
				</div>
		</div>
		<div class="m-add-info">
				<i class="fab fa-skype"></i>				
				<div class="m-addbox">					
					<p style="font-size:18px;text-align:justify;">www.gracechristianfellowshipuganda.com</p>
				</div>
		</div>
		<div class="m-add-info">
				<i class="far fa-clock"></i>				
				<div class="m-addbox">					
					<p style="font-size:18px;text-align:justify;">Monday-Sunday 08.00AM - 9.00PM</p>
				</div>
		</div>	
	</div>
		<div class="one_half last_column">
		<h2 class="section_title">Send Us A Message</h2>
		<div class="main-form-area" id="contactform_main">
		<?php
			if(isset($_GET['submit'])){
				$to = "info@gracechristianfellowshipchurchuganda.com"; // this is your Email address
				$from = $_GET['email']; // this is the sender's Email address
				$s_name = $_GET['s_name'];
				$phone = $_GET['phone'];
				$website = $_GET['website'];
				$message = $_GET['subject'];
				$subject = "Form submission";
				$subject2 = "Copy of your form submission";
				$message =  $s_name . "\n\n"  .$_GET['subject'];
				$message2 = "Here is a copy of your message " . $s_name . "\n\n" . $_GET['message'];
				$headers = "From:" . $from;
				$headers2 = "From:" . $to;
				mail($to,$subject,$message,$headers);
				mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
				echo "Mail Sent. Thank you " . $s_name . ", we will contact you shortly.";
				// You can also use header('Location: thank_you.php'); to redirect to another page.
				// You cannot use header and echo together. It's one or the other.
				}
			?>		
			<form name="contactform" action="contacts.php" method="get">
				<p style="font-size:18px;text-align:justify;">
				<input type="text" name="s_name" value="" placeholder="Name" style="width:100%;" /></p>
				<p style="font-size:18px;text-align:justify;" >
				<input type="email" name="email" value="" placeholder="Email" style="width:100%;" /></p><div class="clear"></div>
				<p style="font-size:18px;text-align:justify;">
				<input type="tel" name="phone" value="" placeholder="Phone" style="width:100%;"/></p>
				<p style="font-size:18px;text-align:justify;">
				<input type="url" name="website" value="" placeholder="Website" style="width:100%;" /></p>
				<div class="clear"></div>
				<p style="font-size:18px;text-align:justify;">
				<textarea name="subject" placeholder="Message" style="width:100%;"></textarea>
				</p><div class="clear"></div>
				<div class="clear">
				</div>
				<p class="sub">
					<input type="submit" name="submit" value="Submit" class="search-submit" />
				</p>
			</form>			
			</div>
		</div>              
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php include('templates/footer.php');?>