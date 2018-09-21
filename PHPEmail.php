<!doctype html>


<html>

<head>
    <title>PHP Email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email</h2>
    <?php
    // Array providing example emails
    $emailAddresses = array("john.smith@php.test", 
                           "mary.smith.mail@php.example",
                           "john.jones@php.invalid",
                           "alan.smithee@test",
                           "jsmith456@example.com",
                           "jsmith456@test",
                           "mjones@example",
                           "mjones@example.net",
                           "jane.a.doe@example.org");
    function validateAddress($address){
        if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        }
        else{
            return false;
        }
    }
    
    foreach ($emailAddresses as $thisAddress) {
        if (validateAddress($thisAddress) === false) {
            echo "<p>the e-mail address <em>$thisAddress</em> does not appear to be valid./p>";
        }
    }
    ?>
</body>

</html>
