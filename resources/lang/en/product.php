<?php 
$langs = DB::table('products')->select('id','name','description')->get();
$output = array();
foreach ($langs as $lang) {
	$output['proname'.$lang->id] = $lang->name;
	$output['description'.$lang->id] = $lang->description;
}
return $output;
?>