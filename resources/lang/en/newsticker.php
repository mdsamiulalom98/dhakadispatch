<?php 
$langs = DB::table('newstickers')->select('id','title')->get();
$output = array();
foreach ($langs as $lang) {
	$output['title'.$lang->id] = $lang->title;
}
return $output;
?>