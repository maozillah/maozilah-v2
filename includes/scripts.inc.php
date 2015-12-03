<?php

// ini_set('display_errors', '1');
// error_reporting(E_ALL);

$pageName = basename($_SERVER['PHP_SELF'], ".php");

function getMenuButton() {
	global $pageName;

	$rightMenuButton= '<button id="showRightPush" class="align_right menu-button">
		<div class="nav-toggle"><span></span></div>
		</button>';

	if ($pageName !== 'index') {
		return ('<button id="showLeftPush" class="align_left menu-button">
				
				<div class="projectButton">
					<div id="folder"><i class="fa fa-folder fa-3x"></i></div>
					<div id="open_folder"><i class="fa fa-folder-open fa-3x"></i></div>
                </div>
                
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

	if ($pageName !== 'index') {
		return ("<script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush');

            showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');

            scroll =!scroll;

            if (scroll) {
			stopScrolling();
			} else {
			continueScrolling();
			}
			
            };
        </script>");
	}
}

if(isset( $_GET['pid']))
{
	$projID = $_GET['pid'];
	require 'projects/'.$projID. '.php';
} 

// count number of projects in projects directory
$dir = "./projects/";
$fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
$fileCount = iterator_count($fi);

function projNavigation() {
	global $projID;
	global $fileCount;

	$next_page = $projID + 1;
	$prev_page = $projID - 1;

	$next = '<div class="align_right padding-right"><a href="project.php?pid='.$next_page.'">Next &#8594;</a></div>';
	$previous = '<div class="align_left padding-left"><a href="project.php?pid='.$prev_page.'">&#8592; Previous</a> </div>';

	// check if first page
	if 	($prev_page == 0) {
	 	return ($next);
	 // check if last page
	} elseif ($next_page > $fileCount) {
		return ($previous);
	} else {
		return ($next . $previous);
	}
}

function GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $descrImgUrl) {
	return ('<a href="project.php?pid='.$pid.'" class="featureImg">
		<div style="background-image:url(img/'.$descrImgUrl.')"></div>
					<figcaption>
					<h2>'.$projectTitle.'</h2>
					<h6>'.$projectTypes.'</h6>
					<span>'.$shortDescr.'</span>
					</figcaption>
			</a>');
}

function displayProjectDescr() {
	global $fileCount;

	for ($i = 1; $i <= $fileCount; $i++) {
    include 'projects/'.$i.'.php';
    echo GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $descrImgUrl);
	}
}

?>