<?php

// posted data to local variables 
$Email = Trim(stripslashes($_POST['Email'])); 
$Name = Trim(stripslashes($_POST['Name'])); 

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
$EmailTo2 = "mark@corporate1st.com";
$From = "mark@corporate1st.com";
$Subject = "Check out the Network Unlimited app - " . $Name;
$Subject2 = "App sent";
$headers = "From: $From" . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// prepare email body text
$Body = '
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
    	<br />Get the app!
    </p>
        
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        To install the App-Platform.net app on your device just follow the link!<br />
        <a href="http://networkunlimited.app-platform.net/" target="_blank" style="color:#40ae49; text-decoration:none;">networkunlimited.app-platform.net</a><br />
		<em style="font-size:10px;">Note: iOS users please use the "open in safari" button in your email app.</em>
    </p>
    
  <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;"><br />
      If you are having difficulty installing the app please go to <br />
      <a href="http://app-platform.net/support.htm" target="_blank" style="color:#40ae49; text-decoration:none;">app-platform.net/support.htm</a> or contact us at <a href="mailto:support@app-platform.net" target="_blank" style="color:#40ae49; text-decoration:none;">support@app-platform.net</a> 
    </p>

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
    
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; color:#40ae49; display:inline-block;">
    	<br>App Sent 
    </p>
    
    <p style="margin: 10px 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;">
        ';$Body2 .= $Name; $Body2 .= ' has sent your app to ';$Body2 .= $Email; $Body2 .= '.
	</p>

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