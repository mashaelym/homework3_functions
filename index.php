<?php

$obj =new main();
$text = "String Functions";
$obj->StringFunc($text);

class main {
public function __construct() {
echo 'This is an object </br>';
}
public function StringFunc(){
echo '<h1>String Functions:</h1>';
print($text);
echo '<hr>';
}


public function __destruct() {
echo '</br> Finished!';
}
}


?>
