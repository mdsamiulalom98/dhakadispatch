<?php 
$langs = DB::table('products')->select('id','name_bn','description_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['proname'.$lang->id] = $lang->name_bn;
	$output['description'.$lang->id] = $lang->description_bn;
}
return $output;
?>