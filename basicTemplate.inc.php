<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

if(isset( $_GET['pid']))
{
	$pageID= $_GET['pid'];
}else{
	$pageID=1;
}

function getMenuButton() {
	global $pageID;

	$rightMenuButton= '<button id="showRightPush" class="align_right menu-button">
		<div class="nav-toggle"><span></span></div>
		</button>';

	if ($pageID == '1') {
		return ($rightMenuButton);
	} else {
		return ('<button id="showLeftPush" class="align_left menu-button">
                <div class="nav-toggle"><span></span></div>
                </button>
                
                <button id="showRightPush" class="align_right menu-button">
                <div class="nav-toggle"><span></span></div>
                </button>');
	}
}

function getScripts() {
	global $pageID;

	$leftMenuScript = "<script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush');
            showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
            };
        </script>";

	if (!($pageID == '1')) {
		return ($leftMenuScript);
	}
}

function GetTitle() {
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

function GetContent() {
	global $pageID;

	switch($pageID){
		case '1':
			return ('<p>blachblah</p>');
			break;
		case '2':
			return ('<p>about us</p>');
			break;
		case '3':
			return ('<p>contact lalalala</p>');
			break;
		default:
			return('...');
	}
}

?>