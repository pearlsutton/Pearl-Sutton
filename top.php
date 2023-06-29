<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE HTML>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>Online Art Portfolio - Pearl Sutton</title>
        <meta name="author" content="Pearl Sutton">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A composition of one's work is one of the best ways to open a door for others to
        see who you are. This is a presentation of the various art work and projects that I have completed over the past few 
        years. This online portfolio provides me an opportunity to connect with others who share
        the same ideas and interests, as well as hold a place for me to see my growth and improvement overtime.">

        
        <link rel="stylesheet"
            href="css/custom.css?version=<?php print time(); ?>"
            type="text/css">

        <link rel="stylesheet"
            media="(max-width: 800px)"
            href="css/custom-tablet.css?version=<?php print time(); ?>"
            type="text/css">
        
        <link rel="stylesheet"
        media="(max-width: 600px)"
        href="css/custom-phone.css?version=<?php print time(); ?>"
        type="text/css">

    </head>

<?php
print '<body class="' . $pathParts['filename'] . '">';
print '<!-- ################     Start of Body Element ################ -->';
include 'connect-DB.php';
include 'header.php';
include 'nav.php';
?>