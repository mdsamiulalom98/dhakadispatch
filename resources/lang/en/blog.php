<?php 
$langs = DB::table('blogs')->select('id','title','description')->get();
$output = array();
foreach ($langs as $lang) {
	$output['title'.$lang->id] = $lang->title;
	$output['description'.$lang->id] = $lang->description;
}
return $output;
?>