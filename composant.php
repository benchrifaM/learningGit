<?php
	
	$count = 0; 
	$sum = 0 ;

	function totalPrice(int $price){
		
		foreach($price as $item){
			$sum +=$price;
			$count++;	
		}

		echo $count;
		echo $sum;
	
	}


	echo totalPrice([10,20,30,40,50]);

?>
