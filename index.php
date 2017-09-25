<?php

$obj =new main();
$text = "String Functions";
$obj->StringFunc($text);
$obj->chr($value);

class main {
public function __construct() {
echo 'This is an object </br>';
}
public function StringFunc(){
echo '<h1>String Functions:</h1>';
print($text);
}

public function chr($value) {
echo '<h2>1: Chr() function</h2>';
echo 'The ASCII character for the number 65 is ' . chr(65);
echo '<hr>';
}


public function __destruct() {
echo '</br> Finished!';
}
}


?>
