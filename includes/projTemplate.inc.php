<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

if(isset( $_GET['pid']))
{
	$projID= $_GET['pid'];
	require 'projects/'.$projID. '.php';
} 

// count number of projects in projects directory
$dir = "./projects/";
$fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
$fileCount = iterator_count($fi);

function GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $imgUrl) {
	return ('<a href="project.php?pid='.$pid.'" class="featureImg" style="background-image:url(img/'.$imgUrl.')">
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
    echo GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $imgUrl);
	}
}

?>