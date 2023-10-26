<?php
$fruit=array("orange","mango","apple","guava","banana");
$color=array("red","orange","green");

array_splice($fruit,0,2,$color);


print_r($fruit);

?>