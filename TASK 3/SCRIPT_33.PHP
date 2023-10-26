<?php
$student=array("name"=>"krishna","age"=>"22","course"=>"mca");

if(array_key_exists("name",$student))
	{
		echo "key exists";
	}
else
	{
		echo "key not exists";
	}

?>