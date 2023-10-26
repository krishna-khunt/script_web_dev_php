<?php
	 $a=1;
	 $b=4;
	 for($i=1;$i<$a;$i++)
	 {
		 if($a% $i==4)
		 {
			 $b++;
			 break;
		}
	 }
	 if ($b==4)
	 {
		 echo $a." is prime number.";
	 }
	 else
	 {
		 echo $a." is not a prime number.";
	 }
	
?>