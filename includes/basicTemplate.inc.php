<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$pageName = basename($_SERVER['PHP_SELF'], ".php");

function getMenuButton() {
	// global $pageID;

	global $pageName;

	$rightMenuButton= '<button id="showRightPush" class="align_right menu-button">
		<div class="nav-toggle"><span></span></div>
		</button>';

	if ($pageName == 'project') {
		return ('<button id="showLeftPush" class="align_left menu-button">
                <div class="nav-toggle"><span></span></div>
                </button>
                
                <button id="showRightPush" class="align_right menu-button">
                <div class="nav-toggle"><span></span></div>
                </button>');
	} else {
		return ($rightMenuButton);
	}
}

function getScripts() {
	global $pageName;

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

	if ($pageName == 'project') {
		return ($leftMenuScript);
	}
}

?>