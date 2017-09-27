<?php

$obj =new main();
$text = "String Functions";
$obj->StringFunc($text);
$obj->chr($value);
$obj->strlen($name);
$obj->rtrim($str);
$obj->htmlspecialchars($val);
$obj->strpos($strr,$strr2);
$obj->str_replace($str1,$new,$str2);
$obj->str_pad($stringg, $num);
$obj->str_shuffle($shuf);
$obj->strrev($ster);
$obj->strtoupper($up);
$arryText= "Array Functions";
$obj->ArrayFunc($arryText);
$obj->array_pop($array);
$obj->array_shift($array);
$obj->array_sum($price);
$obj->array_product($numbers);
$obj->sort($numbers1);
$obj->array_unique($uniq);
$obj->count($arry);
$obj->arrayfun($vall1);
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
public function htmlspecialchars($val) {
$val="&amp";
echo '<h2>4: Htmlspecialchars() function</h2>';
echo 'The HTML special character for ' . $val . ' is ' . htmlspecialchars($val);
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
//sixth
public function str_replace($str1,$new,$str2){
$str1='-';
$new=' ';
$str2= 'It-is-a-beautiful-day!';
echo '<h2>6: Str_replace() function</h2>';
echo 'Original sentence: ' . $str2;
echo '<p> Replacing all dashes with spaces, the sentence would look like this: </p>' . str_replace($str1,$new,$str2);
echo '<hr>';
}
//seventh
public function str_pad($stringg, $num){
$stringg='Yousef';
$num=11;
echo '<h2>7: Str_pad() function</h2>';
echo 'Padding the name ' . $stringg . ' with 11 spaces, the result is:  ' .
str_pad($stringg, $num);
echo '<hr>';
}
//eighth
public function str_shuffle($shuf){
$shuf='programming is fun';
echo '<h2>8: Str_shuffle() function</h2>';
echo 'Shuffiling  ' .'('. $shuf .')'. ' to ' .'('. str_shuffle($shuf).')';
echo '<hr>';
}
//ninth
public function strrev($ster){
$ster='Reverse This';
echo '<h2>9: Strrev() function</h2>';
echo 'Reversing  ' .'('. $ster .')'. ' to become ' .'('. strrev($ster).')';
echo '<hr>';

}
//tenth (last)!!!
public function strtoupper($up){
$up='make me all caps';
echo '<h2>10: Strtoupper() function</h2>';
echo 'Converting the folloing string   ' .'('. $up .')'. ' to all upper case: ' .'('. strtoupper($up).')';
echo '<hr>';
}
//arrays
public function ArrayFunc(){
echo '<h1>Array Functions:</h1>';
print($arryText);
}
//first array function
public function array_pop($array){
$array=array(1,2,3,4,5,6,7,8,9,10);
echo '<h2>1: Array_pop() function</h2>';
echo 'The last element of the array is: ' . array_pop($array);
echo '<hr>';
}
//second 
public function array_shift($array){
$array=array('Mashael','Yousef','Fouzia','Marwa');
echo '<h2>2: Array_shift() and Print_r() functions</h2>';
echo 'The removed and returned first value of this array is: ' . print_r( $array)  . array_shift($array);
echo '<hr>';
}
//third
public function array_sum($price){
$price=array(12.4,44.5,769.76,66.98);
echo '<h2>3: Array_sum() function</h2>';
echo 'The total price is  ' . array_sum($price);
echo '<hr>';
}
//fourth
public function array_product($numbers){
$numbers=array(56,33);
echo '<h2>4: Array_product() function</h2>';
echo 'The product of  ' . $i=$numbers[0] .' and ' . $ii=$numbers[1] . ' = ' . array_product($numbers);
echo '<hr>';
}
//fifth
public function sort($numbers1){
$numbers1=array('S','A','B','L');
echo '<h2>5: Sort() function</h2>';
echo 'This is the array list after sorting:  ';
sort($numbers1);
print_r($numbers1);
echo '<hr>';
}
//sixth
public function array_unique($uniq){
$uniq=array(12,12,15,15,19,19,19);
echo '<h2>6: Array_unique() function</h2>';
echo 'The unique array is  ';
array_unique($uniq);
print_r($uniq);
echo '<hr>';
}
//seventh
public function count($arry){
$arry=array(12,34,5,12,5,4,4,2,7,8);
echo '<h2>7: Count() function</h2>';
echo 'The number of elements in the array is  ' . count($arry);
echo '<hr>';
}
//eighth
public function arrayfun($vall1){
$vall1=array('Meesha','Nora','Sami','Sara','Jack');
unset($vall1[2]);
echo '<h2>8: Unset() function</h2>';
echo 'Deleting the element in position [2] :  ' ;
print_r($vall1);
echo '<hr>';
}

//destruct
public function __destruct() {
echo '</br> Finished!';
}
}

?>
