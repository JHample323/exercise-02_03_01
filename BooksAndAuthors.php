<!doctype html>


<html>

<head>
    <title>Books and Authors</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Books and Authors</h2>
    <?php
    // creates array for book titles
    $books = array("The adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
    // Array for surnames
    $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
    // Array for author names
    $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");
    for ($i = 0; $i < count($books); $i++) {
        // Providea Authors real name and book titles
      echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}. </p>"; 
    }
    for ($i = 0; $i < count($books); $i++) {
        // Provides length of title
        echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>"; 
    }
    
    echo "<h2>Manipulating Strings</h2>";
    $startingText = "mAdAm, i'M aDaM";
    $uppercaseText = strtoupper($startingText);
    $lowercaseText = strtolower($startingText);
    echo "<p>$uppercaseText</p>\n";
    echo "<p>$lowercaseText</p>\n";
    // Makes text all uppercase
    echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
    // Makes text all lowercase
    echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
    $workingText = ucwords($lowercaseText);
    echo "<p>$workingText</p>\n";
    
//    echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
//    echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
//    $workingText = $ucwords($lowercaseText);
//    echo "<p>$workingText</p>\n"
        
    echo "<h2>Other Manipulations</h2>";
    echo "<p>" . md5($workingText) . "</p>\n";
    echo "<p>" . substr($workingText, 0,6) . "</p>\n";
    echo "<p>" . substr($workingText, 7) . "</p>\n";
    echo "<p>" . strrev($workingText) . "</p>\n";
    echo "<p>" . str_shuffle($workingText) . "</p>\n";
    ?>
</body>

</html>
