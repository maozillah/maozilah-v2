<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

function GetProjectDescr($projectTitle, $projectTypes, $shortDescr, $imgUrl) {
	return ('<a href="project.php" class="featureImg" style="background-image:url(img/'.$imgUrl.')">
				<figcaption>
				<h2>'.$projectTitle.'</h2>
				<h6>'.$projectTypes.'</h6>
				<span>'.$shortDescr.'</span>
				</figcaption>
			</a>');
}

?>