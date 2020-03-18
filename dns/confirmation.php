<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Thank You</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <p>Thank you for contacting us.<br />
    Here is a summary of your order information: <br /><br /></p>
    
    <?php
    print(nl2br($_SESSION['body']));
    unset($_SESSION);
    session_destroy();
    ?>
    
    <br /><br />
    <p>A confirmation email has been sent to the email address that you provided.<br />
    Someone will be in contact with you shortly.<br /></p>
    
    <p>Version 1.00.02</p>
</body>

</html>
