<?php 
$langs = DB::table('childcategories')->select('id','childcategoryName')->get();
$output = array();
foreach ($langs as $lang) {
	$output['childcatname'.$lang->id] = $lang->childcategoryName;
}
return $output;
?>