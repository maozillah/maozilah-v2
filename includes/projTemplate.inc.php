<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

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
	return ('<a href="project.php?pid='.$pid.'" class="featureImg" style="background-image:url(img/'.$descrImgUrl.')">
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