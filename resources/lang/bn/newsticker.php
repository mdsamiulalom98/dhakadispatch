<?php 
$langs = DB::table('newstickers')->select('id','title_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['title'.$lang->id] = $lang->title_bn;
}
return $output;
?>