<?php

$EmailFrom = "The WOA Form";
$EmailTo = "johnsonoadigun@gmail.com";
$Subject = "Message from With Open Arms website";
$Name = Trim(stripslashes($_POST['first_name'])); 
$LName = Trim(stripslashes($_POST['last_name'])); 
$Tel = Trim(stripslashes($_POST['telephone'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation

 if (($Name=="")||($Email=="")||($Message==""))
        {
       echo "Please complete all required fields";
        }
else
{
$validationOK=true;

// prepare email body text
$Body = "";
$Body .= "first_name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "last_name: ";
$Body .= $LName;
$Body .= "\n";
$Body .= "telephone: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
}
// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>