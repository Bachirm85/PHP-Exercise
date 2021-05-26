<?php
//input string is MADAM
$input = "MADAM";
echo '<br> Input String '. $input;

//reverse of input string - MADAM - using strrev
$reverse = strrev($input);
echo '<br> Ouput String '. $reverse;

//condition to check if the input and the reverse of the string is equal or not
if($input == $reverse) {
echo '<br> '.$input.'  is a palindrome';
}
else {
echo '<br>'.$input.' is not a palindrome';
}
?>