<?php 
$langs = DB::table('pagecategories')->select('id','pagename')->get();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->pagename;
}
return $output;
?>