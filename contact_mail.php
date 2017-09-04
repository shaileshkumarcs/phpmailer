<?php
require('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port     = 465;  
$mail->Host     = "smtp.gmail.com";
$mail->Username = "XXXXXXX@gmail.com";
$mail->Password = "XXXXXXX";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);

$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("XXXXXXX@gmail.com");	
$mail->Subject = $_POST["subject"];
$mail->WordWrap  = 80;
$mail->MsgHTML($_POST["content"]);
if(is_array($_FILES)) {
$mail->AddAttachment($_FILES['attachmentFile']['tmp_name'],$_FILES['attachmentFile']['name']); 
}
$mail->IsHTML(true);
if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	
//https://code.google.com/a/apache-extras.org/phpmailer/p/downloads/list
?>
