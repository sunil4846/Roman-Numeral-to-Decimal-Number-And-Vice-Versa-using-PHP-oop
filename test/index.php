<?php  

include 'class.php';
$test = new Roman();
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Roman Numeral to Decimal Number Converter</title>
	<style>
    body {
    
    font-size: 17px;
    font-weight: bold;
    };
    </style>
</head>
<body>
	<p><h2>Roman Numeral to Decimal Number And Vice-Versa</h2></p>
	<form method="post" action="">
		<label>Enter Roman Numeral:</label>
		<input type="text" name="roman" value="<?php echo @$str ?>"><br><br>
		
		<label>Enter Decimal Number:</label>
		<input type="number" name="decimal" value="" min="0" ><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>


<?php  

if(isset($_POST['submit'])) {
	//roman to decimal
	$str = $_POST['roman'];
	echo "<br>";
	echo "The Decimal equivalent of " .$str. " is ", 
              $test->romanToDecimal($str), "\n"."</br>"; 
    //decimal to roman
    $dec = $_POST['decimal'];
   	echo "<br>";
   	echo "The Roman equivalent of " .$dec. " is ", 
              $test->decimalToRoman($dec), "\n";
}

?>