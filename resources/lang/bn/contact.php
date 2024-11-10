<?php 
$langs = DB::table('contacts')->select('id','hotline_bn','phone_bn','address_bn')->get();
$output = array();
foreach ($langs as $lang) {
	$output['hotline'.$lang->id] = $lang->hotline_bn;
	$output['phone'.$lang->id] = $lang->phone_bn;
	$output['address'.$lang->id] = $lang->address_bn;
}
return $output;
?>