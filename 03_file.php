<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String Operations
    <?php
// 1. String Concatenation
$string1 = "Hello";
$string2 = " PHP";
$concatenatedString = $string1 . $string2;

echo "<p>String Concatenation Example:</p>";
echo "<p>$concatenatedString</p>";

// 2. String Length
$sampleString = "This is a sample string.";
$stringLength = strlen($sampleString);

echo "<p>String Length Example:</p>";
echo "<p>The length of the string is: $stringLength</p>";

// 3. Substring
$substring = substr($sampleString, 5, 7);

echo "<p>Substring Example:</p>";
echo "<p>$substring</p>";

// 4. String to Uppercase
$uppercaseString = strtoupper($sampleString);

echo "<p>String to Uppercase Example:</p>";
echo "<p>$uppercaseString</p>";

// 5. String to Lowercase
$lowercaseString = strtolower($sampleString);

echo "<p>String to Lowercase Example:</p>";
echo "<p>$lowercaseString</p>";

// 6. String Replacement
$replaceString = str_replace("sample", "modified", $sampleString);

echo "<p>String Replacement Example:</p>";
echo "<p>$replaceString</p>";

// 7. String Splitting
$words = explode(" ", $sampleString);

echo "<p>String Splitting Example:</p>";
echo "<ul>";
foreach ($words as $word) {
    echo "<li>$word</li>";
}
echo "</ul>";
?>

    </h1>
</body>
</html>