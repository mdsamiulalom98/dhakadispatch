<?php 
$langs = DB::table('create_pages')->select('id','name','title','description')->get();
$output = array();
foreach ($langs as $lang) {
	$output['name'.$lang->id] = $lang->name;
	$output['title'.$lang->id] = $lang->title;
	$output['description'.$lang->id] = $lang->description;
}
return $output;
?>