<?php

$obj =new main();
$text = "String Functions";
$obj->StringFunc($text);
$obj->chr($value);
$obj->strlen($name);
$obj->rtrim($str);
$obj->htmlentities($val);
$obj->strpos($strr,$strr2);
class main {
public function __construct() {
echo 'This is an object </br>';
}
public function StringFunc(){
echo '<h1>String Functions:</h1>';
print($text);
}
// first function
public function chr($value) {
echo '<h2>1: Chr() function</h2>';
echo 'The ASCII character for the number 65 is ' . chr(65);
echo '<hr>';
}
//second
public function strlen($name){
$name='mashael';
echo '<h2>2: Strlen() function</h2>';
echo 'The string length for ' . $name . ' is ' . strlen($name);
echo '<hr>';
}
 // third
public function rtrim($str) {
$str="      Yousef      ";
echo '<h2>3: Rtrim() function</h2>';
echo 'The name after Right trimming is: ' .  rtrim($str);
echo '<hr>';
}
//fourth
public function htmlentities($val) {
$val="&amp";
echo '<h2>4: Htmlspecialchars() function</h2>';
echo 'The HTML special character for ' . $val . ' is ' . htmlentities($val);
echo '<hr>';
}

//fifth 
public function strpos($strr,$strr2) {
$strr= 'Mashael Almoqbel is a Student';
$strr2= 'is';
echo '<h2>5: Strpos() function</h2>';
echo 'The position of the string '. '(' . $strr2  . ')' . ' in this sentence ' . '(' . $strr . ')' . ' is: '. $i=strpos($strr,$strr2);
echo '<hr>';

}

public function __destruct() {
echo '</br> Finished!';
}
}


?>
