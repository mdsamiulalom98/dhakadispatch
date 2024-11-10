<?php 
$langs = DB::table('contacts')->select('id','hotline','phone','address')->get();
$output = array();
foreach ($langs as $lang) {
	$output['hotline'.$lang->id] = $lang->hotline;
	$output['phone'.$lang->id] = $lang->phone;
	$output['address'.$lang->id] = $lang->address;
}
return $output;
?>