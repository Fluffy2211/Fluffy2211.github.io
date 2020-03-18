<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Thank You</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <p>Thank you for contacting us.<br /></p>
    
    <?php
    print(nl2br($_SESSION['body']));
    unset($_SESSION);
    session_destroy();
    ?>
    
    <br /><br />
    <p>A email has been sent to the company containing your name, email, and comments<br />
    Someone will be in contact with you shortly.<br /></p>
    
    <p>Version 1.00.02</p>
</body>

</html>
