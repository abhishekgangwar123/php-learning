<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first php website

        <?php
        echo "Hello World!"; //prints

        // variables in PHP are case sensitive and can start with a letter or underscore  
        $Variable1 = 12;
        $Variable2 = 10;

        echo $Variable1 + $Variable2; // prints 22

        // operators in PHP
        // Arithmetic Operators
        echo  "<br>";
        echo "the value of variable1 + variable2 is ";
        echo $Variable1 + $Variable2;
        echo "<br>";
        echo  "<br>";
        echo "the value of variable1 + variable2 is ";
        echo $Variable1 - $Variable2;
        echo "<br>";
        echo  "<br>";
        echo "the value of variable1 + variable2 is ";
        echo $Variable1 * $Variable2;
        echo "<br>";
        echo  "<br>";
        echo "the value of variable1 + variable2 is ";
        echo $Variable1 / $Variable2;
        echo "<br>";

        // Assignment Operators
        $newVar = $Variable1;
        echo "The new value of newVar is";
        echo $newVar;

        // Comparison Operators
        echo " <br/>";
        echo "the value of 1==4 is";
        echo var_dump(1==4);
        // Increment/Decrement Operator
        // Logical operators{AND(&&), OR(||), NOT(!)}

        // Data Types in PHP
        // there are six types of data in php:        
            /*  1. String
                2. Integer
                3. Float    
                4. Boolean
                5. Array
                6. Object
            */   
            echo "<br/>";
            $var = "this is a string";
            echo var_dump($var);
            echo "<br/>";

            $var = 67;
            echo var_dump($var);
            echo "<br/>";

            $var = 67.233;
            echo var_dump($var);
            echo "<br/>";
            
            $var = true;
            echo var_dump($var);
            echo "<br/>";
            
            


        ?>
    </div>
</body>
</html>