<?php 
$langs = DB::table('blogcategories')->select('id','name')->get();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->name;
}
return $output;
?>