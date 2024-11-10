<?php 
$langs = DB::table('subcategories')->select('id','subcategoryName')->get();
$output = array();
foreach ($langs as $lang) {
	$output['subcatname'.$lang->id] = $lang->subcategoryName;
}
return $output;
?>