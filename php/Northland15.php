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
$EmailTo2 = "jaci.christensen@smartpress.com";
$From = "jaci.christensen@smartpress.com";
$Subject = "You have been referred to Jaci Christiansen by " . $Name;
$Subject2 = "Referral";
$headers = "From: $From" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// prepare email body text
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
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#40ae49; display:inline-block;">
    	<br />Network Unlimited Referral
    </p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        SmartPress<br />
        <br />
		<strong>Jaci Christiansen</strong><br />
		Printer<br />
		507-382-8537<br />
		<a href="mailto:jaci.christensen@smartpress.com" style="color:#40ae49;">jaci.christensen@smartpress.com</a>
    </p>

</div>

</body>
</html>
';
$Body  = $Message;

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
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#40ae49; display:inline-block;">
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