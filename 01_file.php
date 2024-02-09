<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
    <?php
// 1. Echo
echo "<h1>PHP Revision</h1>";
echo "<p>This is a simple PHP revision file.</p>";
echo "<br>";
// 2. Variables
$name = "John";
$age = 25;
echo "<p>My name is $name and I am $age years old.</p>";
echo "<br>";

// 3. Arithmetic Operators
$a = 10;
$b = 5;
$sum = $a + $b;
$diff = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

echo "<p>Arithmetic Operators:</p>";
echo "<ul>";
echo "<li>Sum: $sum</li>";
echo "<li>Difference: $diff</li>";
echo "<li>Product: $product</li>";
echo "<li>Quotient: $quotient</li>";
echo "</ul>";
echo "<br>";

// 4. Comparison Operators
$num1 = 10;
$num2 = 20;
$isEqual = ($num1 == $num2) ? "true" : "false";
$isNotEqual = ($num1 != $num2) ? "true" : "false";

echo "<p>Comparison Operators:</p>";
echo "<ul>";
echo "<li>Equal: $isEqual</li>";
echo "<li>Not Equal: $isNotEqual</li>";
echo "</ul>";
echo "<br>";

// 5. Logical Operators
$logicalAnd = ($num1 < 15 && $num2 > 15) ? "true" : "false";
$logicalOr = ($num1 < 15 || $num2 > 15) ? "true" : "false";

echo "<p>Logical Operators:</p>";
echo "<ul>";
echo "<li>Logical AND: $logicalAnd</li>";
echo "<li>Logical OR: $logicalOr</li>";
echo "</ul>";
echo "<br>";

// 6. Data Types
$integerVar = 10;
$floatVar = 10.5;
$stringVar = "Hello, PHP!";
$booleanVar = true;

echo "<p>Data Types:</p>";
echo "<ul>";
echo "<li>Integer: $integerVar</li>";
echo "<li>Float: $floatVar</li>";
echo "<li>String: $stringVar</li>";
echo "<li>Boolean: $booleanVar</li>";
echo "</ul>";
echo "<br>";
?>
  </h1>
</body>
</html>