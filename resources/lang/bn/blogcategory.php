<?php 
$langs = DB::table('blogcategories')->select('id','name_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->name_bn;
}
return $output;
?>