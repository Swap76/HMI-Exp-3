<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Tibetan Handicrafts and Bead Store</title>
			<style type="text/css" media="screen">
				@import url(project.css);	
			</style>
	</head>

<body class="homePage">
	<header>
		<div class= "intro">
			<h1> Tibetan Handicrafts and Bead Store </h1>
			<h3> Every decade needs its own manual of handicraft.</h3>
		</div>
	</header>

	<div class="menu">
	<ul>
  		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/index.html">Home Page</a></h3></li>
  		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/prime.php">Become our Prime Member</a></h3></li>
 		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/contact.php">Contact Us</a></h3></li>
 		<li><h3><a href="http://sand.truman.edu/~ns7442/project-website/return.html">Return Policy</a></h3></li>
	</ul>
    </div>
	
	<?php
	/* In this milestone, I have created a very basic contact form to get us started. 
	Here is the basic HTML that is used to create our contact form. */

	// A function defined to print all the questions with relative answers.  
	function print_form() 
	{

		echo <<< END

		<form action = "$_SERVER[PHP_SELF]" method = "post" id = "contact">
		<div class = "wrapper">

		<div class = "about">
		<h2> Contact Us </h2>
		<p>
		Do you like to send us a message regarding what you feel about our service, have any comments or feedback, any suggestion for adding new content that may be useful for you and others, any suggestion to improve the quality of existing content, did you find any errors or bugs and want to inform us so that we can correct it, then please send us a mail. We would love to read all of your message. We will make sure that all the important emails will get responded. 
		</p>
		</div>
		<div class = "phpquestions">
		<p>
				
		Name<br/>
		<label><input type="text" name="name" size="35"></label>
		<br/>
		Email<br/>
		<label><input type="text" name="email" size="35"></label>
		<br/>
		Subject<br/>
		<label><input type="text" name="phone" size="35"></label>
		<br/>
		Comments<br/>
		<label><textarea name="message" rows="6" cols="25"></textarea></label>
		<br/>
		
		<input type="hidden" name="stage" value="process">
		<input type="submit" name="sumbit" value="Submit">
		<input type="reset" value="Clear">

		<p><strong>Location:</strong> Shop #53, Boudhnath Stupa, Kathmandu, Nepal</p>
		</p>
		</div>
		</div>
		</form>
END;
	}

	/* To process the contact form we will be using the PHP $_POST function, and creating 
	labels for each name that we have created in our form. This will allow us to further 
	customize the form later on as well. */

	// A function to process the form in PHP.
	function process_form() 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$formcontent = "From: $name \n Message: $message";
		$recipient = "nischalsht7442@gmail.com";
		$subject = "Contact Form";
		$mailheader = "From: $email \r\n";
		if (($name=="")||($email=="")||($message==""))
		{
			echo "All fields are required, please fill again.";
		}
		else
		{	
			mail($recipient, $subject, $formcontent, $mailheader);
			echo "Thank you for your request!";
		}

		END;
	}
	/* Notice our three name tags we have created. We have Name, Email, and Message. These are the 
	three that we created in our form. This is the information that will be sent from our contact 
	form via email. The $recipient area will need to be modified to fit a email address where I 
	wish to have the email sent to.

	After filling out the form and clicking the "Submit" button, visitors will stay on the same page 
	but see a message confirming the form was processed. Submitting the form sets a hidden parameter 
	called action that prevents the form from being displayed again, so that we won't bother visitors 
	with forms they've already filled out. The PHP script also verifies that all the HTML fields are 
	filled in properly. If even one of the field is left empty, it generates an error message.*/

	if (isset($_POST['stage']) && ('process' == $_POST['stage'])) 
	{
	//Calls the function to post the contact. 
		process_form();
	} 
	else 
	{
	//Sends the email and prints the thank you message.
		print_form();
	}
	?>

	
	<div class ="image-divider"></div>

	<footer>
	<div class="footer-content">
	<p class="credit"> &copy; Copyright 2017 Tibetan Handicrafts and Bead Store
	</p>
	</div>
	</footer>

	</body>
	</html>
