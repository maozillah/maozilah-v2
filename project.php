<?php
	include('includes/header.php');

echo (
'
<div class="left projectHeader" style="background-image:url(img/'.$imgUrl.')">
	<div class="projectMeta">
		<h1>'.$projectTitle.'</h1>
		<h3>'.$projectTypes.'</h3>
		<b>'.$projectDate.'</b>
	</div>
</div>
<div class="right">
	<div class="type">
		'.$content.'
	</div>
</div>
<nav class="projects">');

echo projNavigation();
echo ('</nav>');

	include('includes/footer.php');
?>