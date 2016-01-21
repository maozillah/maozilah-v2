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

$projects = array ("aqichina","access","realtor","zenith","otg","busvis","oktoberfest","icook");
// $projects = array ("access","realtor","zenith","otg","busvis","oktoberfest","icook");


// count number of projects in projects directory
$dir = "./projects/";
$fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
$fileCount = iterator_count($fi);

function projNavigation() {
	global $projID, $fileCount, $projects;

	$projectId = array_search($projID, $projects);

	$next_page = $projectId + 1;
	$prev_page = $projectId - 1;

	// check if first page
	if 	($prev_page == -1) {
	 	return ('<div class="align_right padding-right"><a href="project.php?pid='.$projects[$next_page].'">Next &#8594;</a></div>');
	 // check if last page
	} elseif ($next_page > ($fileCount-1)) {
		return ('<div class="align_left padding-left"><a href="project.php?pid='.$projects[$prev_page].'">&#8592; Previous</a> </div>');
	} else {
		return ('<div class="align_right padding-right"><a href="project.php?pid='.$projects[$next_page].'">Next &#8594;</a></div>' . '<div class="align_left padding-left"><a href="project.php?pid='.$projects[$prev_page].'">&#8592; Previous</a> </div>');
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
	global $fileCount, $projects;

	for ($i = 0; $i <= ($fileCount-1); $i++) {
	    include 'projects/'.$projects[$i].'.php';
	    echo GetProjectDescr($projects[$i], $projectTitle, $projectTypes, $shortDescr, $descrImgUrl);
	}
}

?>