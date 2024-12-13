<?php

$name = "Shrey is charusat student";
echo $name;
echo "<br>";

//Lenght
echo "Lenght :".strlen($name);
echo "<br>";
echo "the name of lenght"."is".strlen($name);
echo "<br>";
echo str_word_count($nane);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";
echo str_replace("is", "was",$name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("    how are you        ");
echo "<br>";
echo ltrim("    how are you         ");
echo "</pre>";
echo "<br>";

?>