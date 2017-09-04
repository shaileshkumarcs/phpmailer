<?php
//include 'header.php' ;
?>
<!-- Container -->
<div class="container fullwidth-element">
<!-- Container -->
<div class="container">
<div class="four columns">
	<!-- Information -->
	<div class="widget margin-top-10">
		<div class="accordion">
			<!-- Section 1 -->
			<div>
			</div>
			<!-- Section 2 -->
			<div>
				<ul class="contact-informations margin-top-0">
				</ul>
			</div>
			<!-- Section 3 -->
			<div>
				<!--<ul class="contact-informations second">
					<li><i class="fa fa-phone"></i> <p>+48 880 440 110</p></li>
					<li><i class="fa fa-envelope"></i> <p><a class="__cf_email__" href="http://www.vasterad.com/cdn-cgi/l/email-protection" data-cfemail="85e8e4ece9c5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p></li>
					<li><i class="fa fa-globe"></i> <p>www.tibetfourseasons.com</p></li>
				</ul>-->
			</div>
		</div>
	</div>
	<!-- Social -->
	<div class="widget">
		<div class="clearfix"></div>
	<br>
	</div>
</div>
<!-- Contact Form -->
<div class="twelve columns">
	<div class="extra-padding left">
		<h3 class="headline">Get in Touch <p style="color:maroon; font-size:12px;">(* Mandatory)</p></h3><div class="clearfix"></div>
		<!-- Contact Form -->
		<section id="contact">
			<!-- Success Message -->
			<mark id="message"></mark>
			<!-- Form -->
            <style>
#frmContact {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
#frmContact div{margin-bottom:15px}
#frmContact div label{margin-left:5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid;border-radius:4px;background-color:#FFF;width:50%;}
.error{background-color:#FF6600;border:#AA4502 1px solid;padding:5px 10px;color:#FFFFFF;border-radius:4px;}
.success{background-color:#12CC1A;border:#0FA015 1px solid;padding:5px 10px;color:#FFFFFF;border-radius:4px;}
.info{font-size:.8em;color:#FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:orange;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid;border-radius:4px;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function (e){
$("#frmContact").on('submit',(function(e){
	e.preventDefault();
	$('#loader-icon').show();
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "contact_mail.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#mail-status").html(data);
		$('#loader-icon').hide();
		},
		error: function(){} 	        
		});
	}
}));
function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	if(!$("#userName").val()) {
		$("#userName-info").html("(required)");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("(invalid)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#subject").val()) {
		$("#subject-info").html("(required)");
		$("#subject").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content-info").html("(required)");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}
	return valid;
}
});
</script>
<form id="frmContact" action="contact_mail.php" method="post">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Name * </label>
<span id="userName-info" class="info"></span><br/>
<input type="text" name="userName" id="userName" class="demoInputBox">
</div>
<div>
<label>Email *</label>
<span id="userEmail-info" class="info"></span><br/>
<input type="text" name="userEmail" id="userEmail" class="demoInputBox">
</div>
<div>
<label>Attachment</label><br/>
<input type="file" name="attachmentFile" id="attachmentFile" class="demoInputBox">
</div>
<div>
<label>Subject *</label> 
<span id="subject-info" class="info"></span><br/>
<input type="text" name="subject" id="subject" class="demoInputBox">
</div>
<div>
<label>Content *</label>
<span id="content-info" class="info"></span><br/>
<textarea name="content" id="content" class="demoInputBox" cols="60" rows="6" style="border:1px solid orange;"></textarea>
</div>
<div>
<input type="submit" value="Send" class="btnAction" />
</div>
</form>
<!--<div id="loader-icon" style="display:none;"><img src="LoaderIcon.gif"/></div>
		</section>-->
		<!-- Contact Form / End -->
	</div>
</div>
</div>
<!-- Container / End -->
<div class="margin-top-50"></div>
<?php
//include 'footer.php' ;
?>
