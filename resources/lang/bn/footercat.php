<?php 
$langs = DB::table('pagecategories')->select('id','pagename_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->pagename_bn;
}
return $output;
?>