<!doctype html>


<html>

<head>
    <title>Musical Scale</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Musical Scale</h2>
    <?php
    // Array that sets up the scale
        $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti");
    // Provides text for the foreach to be displayed
        $outputString = "The notes of the musical scale are: ";
        foreach ($musicalScale as $currentNote) {
       // Diplays the notes with text     
            $outputString .= " " . $currentNote;
        }
        echo "<p>$outputString</p>";
    
        echo "<h2>Formatted Text</h2>";
        $displayValue = 9.876;
        // Using escape sequences
        echo "<pre>\n";
        echo "Unformatted text line 1. \r\n";
        echo "\tUnformatted text line 2. \r\n";
        echo "\$displayValue = $displayValue";
        echo "</pre>\n";
        ?>
</body>

</html>
