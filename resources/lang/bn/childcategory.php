<?php 
$langs = DB::table('childcategories')->select('id','childcategoryName_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['childcatname'.$lang->id] = $lang->childcategoryName_bn;
}
return $output;
?>