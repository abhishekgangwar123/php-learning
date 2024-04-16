<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: rgb(209, 179, 179);
            margin: auto;
            padding: 20px;

        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here : </p>
        <?php
        $age = 20;
        if($age>18){
        echo "You can go to party";
        }else {
            echo "Sorry you are too young to party";
        }

        $languages = array("python", "C++", "java", "javascript","php");
        // echo $languages[1];
        // echo count($languages);

        // loops in PHP
        $a = 0;
        echo "<br/>";
        while ($a <= 10){
            echo "<br/>the value of a is:";
            echo $a;
            $a++;
        }
         // Iteratting arrays in PHP using while loop
         $a = 0;
         echo "<br/>";
         while ($a < count($languages)){
             echo "<br/>the language is:";
             echo $languages[$a];
             $a++;
         }
        
         //  do while loop
         $a = 0;
         echo "<br/>";
         do{
            echo "<br/>the value of a is:";
            echo $a;
            $a++;
         }while($a<10);
         
         //  for loop
         echo "<br/>";
         for ($a=0; $a < 10; $a++) { 
            echo "<br/>the value of a is:";
            echo $a;
         }
        
         //  foreach loop
        foreach( $languages as $values ) {
            echo "<br/>the value from foreach loop is : ";
            echo $values;
        }

        // FUNCTIONS-----

        function print_number($number){
            echo "<br>The number is :";
            echo $number;
        }
        print_number(56);

        ?>
    </div>
</body>
</html>