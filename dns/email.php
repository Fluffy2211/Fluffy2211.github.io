<?php 
// Program : Mail sending script
// Author  : Branden Buermann
// Date    : 2019-09-25

// Session starts must be the first code in a script.
session_start();

//Turn on maximum error reporting.
error_reporting(E_ALL);


// This line may have fixed the intermittent sending problem.
// It sets the return path in the email header.
ini_set("sendmail_from", "anderwstb23@gmail.com");

$txtEmail = $_POST['txtEmail'];
if (empty($txtEmail))
{
    // This has to be a relative URL for session Id appending to work.
    header("Location: error.php");
    exit;
}

if (!empty($_POST['txtFirstName'])){
    $txtFirstName = $_POST['txtFirstName'];
} else {
    $txtFirstName = "First name not entered";
}

if (!empty($_POST['txtLastName'])){
    $txtLastName = $_POST['txtLastName'];
} else {
    $txtLastName = "Last name not entered";
}

if (!empty($_POST['txtComments'])){
    $txtComments = $_POST['txtComments'];
} else {
    $txtComments = "Comments not entered";
}

$txtFullName = $txtFirstName + ' ' + $txtLastName;

$body =
$txtFullName . " - Your name.
" . $txtEmail . " - Email address we can contact you at.

" . $txtComments . " - Comments.
" . "ver 1.00.00";

$_SESSION['body'] ="<p>" . $body . "</p>";

// Compose a confermation message.

//$bodyconfirm = "Thank you for submitting an order.
//Here is a summary if the information that you provided:
//"
//. $body .
//"

//someone will be in contact with you shortly

//Coustom Controllers inc.
//585 Main Street
//P.O. Box 12345
//Hutchinson, MN 55350
//Phone: 320-587-0000";

// End of confirmation message.

// Send the email with the data to the company email adress.
mail('andrewstb23@gmail.com', '*** Coustomer Contact Form From DNS Website ***', $body, 
    "From: \"$txtFullName\\r\n" .
    "Reply-To: \"$txtFullName\\r\n" .
    "X-Mailer: PHP/" . phpversion());

// Send confirmation email with the data to the customer.
//mail($txtEmail, 'Confirmation email - Coustom Controllers inc.', $bodyconfirm,
    //"From: \"Coustom Controllers inc.\" <orders@brandenbuermann.info>\r\n" .
    //"Reply-To: \"Coustom Controllers inc.\" <orders@brandenbuermann.info>\r\n" .
    //"X-Mailer: PHP/" . phpversion());


// This has to be a relative URL for session ID appending to work.
// Remember to send the session ID with the URL.
header("Location: confirmation.php?". SID);
?>