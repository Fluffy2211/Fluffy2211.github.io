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

" . $txtComments . " - Comments.";

$_SESSION['body'] ="<p>" . $body . "</p>";


// Send the email with the data to the company email adress.
mail('andrewstb23@gmail.com', '*** Coustomer Contact Form From DNS Website ***', $body, 
    "From: \"$txtFullName\\r\n" .
    "Reply-To: \"$txtFullName\\r\n" .
    "X-Mailer: PHP/" . phpversion());



// This has to be a relative URL for session ID appending to work.
// Remember to send the session ID with the URL.
header("Location: confirmation.php?". SID);
?>