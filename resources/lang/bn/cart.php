 <?php 
$langs = Cart::instance('shopping')->content();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->options->name_bn;
}
return $output;
?>