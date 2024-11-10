<?php 
$langs = Cart::instance('compare')->content();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->options->name_bn;
	$output['description'.$lang->id] = $lang->options->description_bn;
}
return $output;
?>
