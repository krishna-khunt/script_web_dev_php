<?php
$names = array('disha', 'remisha', 'hemali', 'krishna');

$filteredNames = array_filter($names, function($name) 
{
   return strlen($name) ;
});
print_r($filteredNames);
?>