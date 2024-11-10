<?php 
$langs = DB::table('subcategories')->select('id','subcategoryName_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['subcatname'.$lang->id] = $lang->subcategoryName_bn;
}
return $output;
?>