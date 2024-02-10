<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="output.css" rel="stylesheet">
</head>

<body>
    <h1>File php
        <?php
        // 1. Conditionals (if-else)
        $condition = true;

        if ($condition) {
            echo "<p>Condition is true. This is inside the 'if' block.</p>";
        } else {
            echo "<p>Condition is false. This is inside the 'else' block.</p>";
        }

        // 2. Arrays
        $fruits = array("Apple", "Banana", "Orange", "Grapes");

        echo "<p>Array Example:</p>";
        echo "<ul>";
        foreach ($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
        echo "</ul>";

        // 3. Loops (for loop)
        echo "<p>For Loop Example:</p>";
        echo "<ul>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>Item $i</li>";
        }
        echo "</ul>";

        // 4. Loops (while loop)
        echo "<p>While Loop Example:</p>";
        echo "<ul>";
        $j = 1;
        while ($j <= 3) {
            echo "<li>Item $j</li>";
            $j++;
        }
        echo "</ul>";

        // 5. Functions
        function addNumbers($num1, $num2)
        {
            return $num1 + $num2;
        }

        $sum = addNumbers(5, 10);
        echo "<p>Function Example:</p>";
        echo "<p>The sum of 5 and 10 is: $sum</p>";
        ?>

    </h1>

</body>

</html>