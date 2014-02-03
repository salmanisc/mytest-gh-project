<?php 


$message = "hello world";

$list = array("one", "two", "three");

function dd($var) {
	
	echo "<pre><tt>";
	var_dump($var);
	echo "<tt></pre>";
}

dd($list);

 ?>