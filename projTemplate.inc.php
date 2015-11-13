<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

if(isset( $_GET['pid']))
{
	$pageID= $_GET['pid'];
}else{
	$pageID=1;
}

function GetProjectDescr() {
	global $pageID;

	switch($pageID){
		case '1':
			return ('Main Menu');
			break;
		case '2':
			return ('About us');
			break;
		case '3':
			return ('Contact info');
			break;
		default:
			return('Make a selection');
	}
}

?>