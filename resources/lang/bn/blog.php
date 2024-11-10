<?php 
$langs = DB::table('blogs')->select('id','title_bn','description_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['title'.$lang->id] = $lang->title_bn;
	$output['description'.$lang->id] = $lang->description_bn;
}
return $output;
?>