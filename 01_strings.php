<?php
    $str = "This";
    echo $str;
    $lenn = strlen($str);
    echo "<br>The length of string is " . $lenn. ".Thank You";
    echo "<br>The number of words of string is " . str_word_count($str). ".Thank You";
    echo "<br>The reversed string is " . strrev($str). ".Thank You";
    echo "<br>The search of is in this  string is " . strpos($str,"is"). ".Thank You";
    echo "<br>The replaced string is " . str_replace("is","at",$str). ".Thank You";

?>