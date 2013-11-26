<?php

// posted data to local variables 
$Email = Trim(stripslashes($_POST['Email'])); 

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


$EmailTo = "info@app-platform.net";
$From = "info@app-platform.net";
$Subject = "Get your own app!";
$headers = "From: $From";


// prepare email body text
$Body = "";
$Body .= "I would like more information about apps from App-Platform.net.";
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Sent from the Network Unlimited app.";

// send email 
$success = mail($EmailTo,$Subject,$Body,$headers);

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/thanks.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
}
?>