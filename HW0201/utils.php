<?php
if(isset($_POST['submit'])){
	$number1 = $_POST['num1'];
	$number2 = $_POST['num2'];
	$operation = $_POST['operation'];
	
	if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
		$error_result = 'Не все поля заполнены';

	}
    else {
	    
		if(!is_numeric($number1) || !is_numeric($number2)){
			$error_result = "Операнды должны быть числами";
		}
		else 
        switch($operation){
			case 'plus':
			    $result = $number1 + $number2;
			    break;
			case 'minus':
			    $result = $number1 - $number2;
			    break;
			case 'multiply':
			    $result = $number1 * $number2;
			    break;
			case 'divide':
			    if( $number2 == '0')
			    	$error_result = "На ноль делить нельзя!";
			    else
			       $result = $number1 / $number2;
			    break;    
		}
	    
	}
   
}
