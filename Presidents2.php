<!doctype html>


<html>

<head>
    <title>Presidents 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents 2</h2>
    <?php
    // String of the first 5 presidents
    $presidents = "George Washington;John Adams;Thomas Jefferson;James Monroe";
    $thisPresident = strtok($presidents, ";");
    while ($thisPresident != NULL) {
        // Displays president names with line breaks
        echo "$thisPresident<br>";
        $thisPresident = strtok(";");
    }
    ?>
</body>

</html>
