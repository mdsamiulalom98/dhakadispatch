<?php 
$langs = Cart::instance('compare')->content();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->name;
	$output['description'.$lang->id] = $lang->options->description;
}
return $output;
?>
