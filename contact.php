<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phone= $_POST['phone'];
	$mes  = $_POST['comment'];
	$headers = "From: ". $mail;
	$txt = "Name : ".$name."<br>Email : ".$mail."<br>Phone : ".$phone."<br>Message : ".$mes;
	echo $txt;
	if(mail("chandra.shalwi@gmail.com", "Contact Form - Request",$txt)) {
		echo "success";
		header('Location: contact-thank-you.html');
		exit();
	} else {
		echo "failed";
	}
}
?>