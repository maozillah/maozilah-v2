<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
if(isset( $_GET['pid']))
{
	$projID= $_GET['pid'];
}else{
	$projID=1;
}
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
	$x = 1;

	for ($i = 1; $i <= 4; $i++) {
    include 'projects/'.$i.'.php';
    echo GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $imgUrl);
	}
	// while($x <= 2) {
		// include 'projects/'.$x.'.php';
		// echo GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $imgUrl);
		// echo $pid, $projectTitle, $projectTypes, $shortDescr, $imgUrl;
	// }
}

function displayProjectDescr2() {
	$x = 2;
	// while($x <= 2) {
		include 'projects/'.$x.'.php';
		echo GetProjectDescr($pid, $projectTitle, $projectTypes, $shortDescr, $imgUrl);
	// }
}

switch($projID){
	case '1':
		include 'projects/1.php';
		break;
	case '2':
		include 'projects/about.php';
		break;
	case '3':
		include 'projects/about.php';
		break;
	default:
		header('Location: index.php');
}

?>