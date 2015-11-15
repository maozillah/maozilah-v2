<?php
	include('includes/header.php');

echo (
'
<div class="left projectHeader" style="background-image:url(img/'.$imgUrl.')">
	<div class="projectMeta">
		<h1>'.$projectTitle.'</h1>
		<h3>'.$projectTypes.'</h3>
		<b>'.$date.'</b>
	</div>
</div>
<div class="right">
	<div class="type">
		'.$content.'
	</div>
</div>
	<nav class="projects">
		<div class="align_left padding-left"><a href="">&#8592; Previous</a> </div>
		<div class="align_right padding-right"><a href="">Next &#8594;</a></div>
	</nav>
	'
);

	include('includes/footer.php');
?>