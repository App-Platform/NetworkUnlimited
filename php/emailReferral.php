<?php

// posted data to local variables 
$Email = Trim(stripslashes($_POST['Email'])); 
$Name = Trim(stripslashes($_POST['Name'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// Validate E-Mail isn't not a Email
if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
	} 
	else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
	exit;
}

// validate required fields have data
if(trim($Email) == '') {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
	exit;
}

$EmailTo = $Email;
$EmailTo2 = "info@app-platform.net";
$From = "info@app-platform.net";
$Subject = "You have been referred to App-Platform.net by " . $Name;
$Subject2 = "Referral";
$headers = "From: $From" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// prepare email body text
$Body  = $Message;
$Body .= '
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>App-Platform.net</title>

</head>

<body>
<div style="margin-left:auto; margin-right:auto; margin-top:20px; max-width:600px;">
	<div style="background:url(http://app-platform.net/emails/images/headerBG.jpg);">
	<a href="http://app-platform.net/"><img src="http://app-platform.net/emails/images/contentTop3.jpg" alt="App-Platform.net" border="0" /></a>
    </div>
    
    <p style="margin: 10px 10px;">
    <img src="http://app-platform.net/emails/images/website.jpg" alt="App-Platform.net" align="right" style="margin-left:10px; margin-bottom:5px;">
    </p>
    
		<br />
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#5a5a5a; display:inline-block;">
    	You have been <br>
    	referred to <br>
  	  	App-Platform.net 
    </p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        We offer custom mobile application design and development. Whether you are looking for a cost effective way to promote yourself or your business, or you need a flexible way to manage your business on the go we have a solution for you.  Anything you can do on the web we can do in an app!
	</p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        The apps we create have the widest possible compatibility working on iOS, Andorid, Windows Phone, Blackberry 10, and in any current web browser. With apps starting at $50 down and $20/month we have a solution for any business!
	</p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
      Learn more on our website <a href="http://app-platform.net" target="_blank" style="color:#00adef; text-decoration:none;">app-platform.net</a>.
    </p>
        
    <p style="margin: 10px 10px;">
    <img src="http://app-platform.net/emails/images/app-platform.png" alt="App-Platform.net" style="margin-left:5px; margin-bottom:5px;" align="right">
    </p>
    
  	  	<br />
		<br />

    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#5a5a5a; display:inline-block;">
    	Get our app!
    </p>
        
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        To see just how easy it is to get one of our apps on your mobile device, just follow the link!
        <a href="http://app.app-platform.net/" target="_blank" style="color:#00adef; text-decoration:none;">app.app-platform.net</a>
    </p>
        
		<br />
		<br />
        
    <p style="margin: 10px 10px;">
    <span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#5a5a5a;">Contact us</span>
    </p>
       
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        We are here to help! If you have any questions  <br>
        you can contact us at:<br />
	</p>
    
      <div style="float:left;">
    	<p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        <strong style="color:#5a5a5a;">App-Platform</strong><br />
		<a href="tel:8005590902" style="color:#00adef; text-decoration:none;">800 559-0902</a><br />
        <a href="mailto:info@app-platform.net" style="color:#00adef; text-decoration:none;">info@app-platform.net</a><br />
        </p>
      </div>

      	<div style="float:left;">
    	<p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        <strong style="color:#5a5a5a;">Jim Hunkins</strong><br />
        <a href="tel:6123842433" style="color:#00adef; text-decoration:none;">612 384-2433</a><br />
        <a href="mailto:jim@app-platform.net" style="color:#00adef; text-decoration:none;">jim@app-platform.net</a><br />
        </p>
        </div>

   	  	<div style="float:left;">
    	<p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        <strong style="color:#5a5a5a;">Stephen Kirchbaum</strong><br />
        <a href="tel:6124621279" style="color:#00adef; text-decoration:none;">612 462-1279</a><br />
        <a href="mailto:stephen@app-platfrom.net" style="color:#00adef; text-decoration:none;">stephen@app-platfrom.net</a><br />
        </p>
        </div>
        
      <div style="clear:both;"></div>

    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        Follow us to be kept up to date on all things App-Platform<br />
        <a href="http://www.linkedin.com/company/app-platform-net" target="_blank"><img src="http://app-platform.net/emails/images/linkedin.png" alt="linkedIn"></a> <a href="https://www.facebook.com/AppPlatformnet" target="_blank"><img src="http://app-platform.net/emails/images/facebook.png" alt="facebook"></a>
	</p>
            
        
		<br />
        
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif;">
        <a href="http://app-platform.net/" target="_blank" style="color:#00adef; text-decoration:none; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 19px;">Get more information and view demos at App-Platform.net!</a><br />
        <br />
    </p>
</div>

<div align="center" style="margin-top:15px;">
	<a href="http://app-platform.net/" target="_blank"><img src="http://app-platform.net/emails/images/logo.jpg" alt="App-Platform.net" border="0" /></a>
</div>

</body>
</html>
';

$Body2  = '
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>App-Platform.net</title>

</head>

<body>
<div style="margin-left:auto; margin-right:auto; max-width:600px;">
	<div style="background:url(http://app-platform.net/emails/images/headerBG.jpg);">
	<a href="http://app-platform.net/"><img src="http://app-platform.net/emails/images/contentTop3.jpg" alt="App-Platform.net" border="0" /></a>
    </div>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#5a5a5a; display:inline-block;">
    	<br>Referral 
    </p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        ';$Body2 .= $Name; $Body2 .= ' has referred you to ';$Body2 .= $Email; $Body2 .= '.
	</p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        ';$Body2 .= $Message; $Body2 .= '
	</p>
</div>
</body>
</html>
';

// send email 
$success = mail($EmailTo,$Subject,$Body,$headers);
$success .= mail($EmailTo2,$Subject2,$Body2,$headers);

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/thanks.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
}
?>