<?php
if(isset($_POST['submit'])) {
	$mail = $_POST['email'];
	$phone= $_POST['phone'];
	$service  = $_POST['inlineRadioOptions'];
	$headers = "From: ". $mail;
	$txt = "Email : ".$mail."<br>Phone : ".$phone."<br>Service : ".$service;
	echo $txt;
	if(mail("chandra.shalwi@gmail.com,info@dezantconsulting.com", "Ask Us Form - Request",$txt)) {
		echo "success";
		header('Location: contact-thank-you.html');
		exit();
	} else {
		echo "failed";
	}
}
?>