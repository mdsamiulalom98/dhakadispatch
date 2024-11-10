<?php 
$langs = Cart::instance('wishlist')->content();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->name;
}
return $output;
?>
