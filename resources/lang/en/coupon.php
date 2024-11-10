<?php 
$langs = DB::table('couponcodes')->select('id','title_en')->get();
$output = array();
foreach ($langs as $lang) {
	$output['title'.$lang->id] = $lang->title_en;
}
return $output;
?>