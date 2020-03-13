<?php 

class Roman
{
	// This function returns value of a Roman symbol   
function value($r) 
{ 
    if ($r == 'I') 
        return 1; 
    if ($r == 'V') 
        return 5; 
    if ($r == 'X') 
        return 10; 
    if ($r == 'L') 
        return 50; 
    if ($r == 'C') 
        return 100; 
    if ($r == 'D') 
        return 500; 
    if ($r == 'M') 
        return 1000; 
  	//else echo "error";
    return 0; 
} 
  
// Returns decimal value of roman numeral
  
function romanToDecimal(&$str) 
{ 
   
    $res = 0; 
  
    // Traverse given input 
    for ($i = 0; $i < strlen($str); $i++) 
    { 
        // Getting value of symbol s[i]   
        $s1 = $this->value($str[$i]); 
  
        if ($i+1 < strlen($str)) 
        { 
            // Getting value of 
            // symbol s[i+1] 
            $s2 =  $this->value($str[$i + 1]); 
  
            // Comparing both values 
            if ($s1 >= $s2) 
            { 
                // Value of current symbol  
                // is greater or equal to  
                // the next symbol 
                $res = $res + $s1; 
            } 
            else
            { 
                $res = $res + $s2 - $s1; 
                $i++; // Value of current symbol is 
                      // less than the next symbol 
            } 
        } 
        else
        { 
            $res = $res + $s1; 
            $i++; 
        } 
    } 
    return $res; 
} 

function decimalToRoman($num)  
{  
    // storing roman values of digits from 0-9  
    // when placed at different places 
    $m = array("", "M", "MM", "MMM","MMMM"); 
    $c = array("", "C", "CC", "CCC", "CD", "D",  
                   "DC", "DCC", "DCCC", "CM"); 
    $x = array("", "X", "XX", "XXX", "XL", "L",  
                   "LX", "LXX", "LXXX", "XC"); 
    $i = array("", "I", "II", "III", "IV", "V",  
                   "VI", "VII", "VIII", "IX"); 
          
    // Converting to roman 
    $thousands = $m[$num / 1000]; 
    $hundereds = $c[($num % 1000) / 100]; 
    $tens = $x[($num % 100) / 10]; 
    $ones = $i[$num % 10]; 
          
    $ans = $thousands . $hundereds . $tens . $ones; 
          
    return $ans; 
} 

}

?>