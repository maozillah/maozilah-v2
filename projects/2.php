<?php
$pid = 2;
$projectTitle = 'Zenith';
$projectTypes = 'front end development, data visualization';
$shortDescr = 'An interactive application for viewing constellations in 3D on the web.';
$imgUrl = 'proj1/lrg_img.jpg';
$descrImgUrl = 'proj1/sml_img.jpg';
$projectDate = 'Winter 2014';

$content = '
<h1>Background</h1>

<div class="box">
<h4>Tools</h4>
HTML, CSS, Javascript, Three.js, Python
</div>

<p><strong><a href="http://maozillah.github.io/zenith/" target="_blank">experience zenith &#8594;</a></strong></p>

<p>Constellations have shaped humanity\'s culture, lore, and science. Yet, they are still just a human invention; dots in the sky joined together based on our desire for order. It\'s easy to forget that these stars exist in three dimensional space (ehe) when one looks at the night sky from earth.</p>

<p>The goal of Zenith is to reframe the familiar view of constellations in a new perspective by using the capabilities of webGL to allow people to explore the constellations in 3D. </p>

<p>The stars are modelled to scale in size and distance from earth using data from the <a href="http://astronexus.com/hyg" target="_blank">HYG database</a>. </p>


<h1>Highlights</h1>
<div class="nolinkstyle">
<a href="img/proj1/video.gif" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/video.gif"></a>
<a href="img/proj1/h_3.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_3.jpg"></a>
</div>

<h2>Embrace a different perspective</h2>
<p>Explore the constellations from different perspectives by using your mouse. Drag to navigate, scroll to zoom.</p>
<div class="nolinkstyle">
<a href="img/proj1/h_1.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_1.jpg"></a>
<a href="img/proj1/h_5.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_5.jpg"></a>
<a href="img/proj1/h_9.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_9.jpg"></a>
<a href="img/proj1/h_6.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_6.jpg"></a>
</div>

<h2>Learn the lore</h2>
<p>Click on constellations to read the associated Greek lore</p>
<div class="nolinkstyle">
<a href="img/proj1/h_2.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_2.jpg"></a>
<a href="img/proj1/h_7.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/h_7.jpg"></a>
</div>

<h1>Process</h1>

<div class="nolinkstyle">
<h2>Conceptualization</h2>
<p>My initital concept was to build an interactive planetarium that would let the user browse the night sky on the web. However that idea was scrapped when I realized it didn\'t really take advantage of the affordances of 3D.</p>
<a href="img/proj1/p1.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p1.jpg"></a>
<a href="img/proj1/p2.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p2.jpg"></a>
<figcaption>Second concept leveraged the affordance of 3D by allowing people to view and explore the stars from space.</figcaption>

<a href="img/proj1/p3.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p3.jpg"></a>
<figcaption>Zenith user experience flowchart</figcaption>

<h2>Building</h2>
<p>This project taught me a lot about project management and how to develop an entire application from scratch. By listing all of the features and forcing myself to prioritize, I was able to arrive at a minimally viable product (MVP); something that I could successfully implement within the given timeline.</p>
<a href="img/proj1/p4.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p4.jpg"></a>
<figcaption>First attempt. Stars are represented by spheres using Three.js</figcaption>
<p>
I knew that I needed to start small so I tried to map the stars of a single constellation. During that time, I made sure to keep scalability in mind as I wanted to be able to map all 12 constellations eventually.</p>

<a href="img/proj1/p5.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p5.jpg"></a>
<figcaption>Starting to connect the lines of the constellation and implementing collision detection of the mouse with the stars. Boy it\'s a lot harder to detect mouse hovers in 3 space.</figcaption>
<p>Along the way I learned about the value of compromise and hacking it a little bit. Don\'t have time to implement a unique render engine to give the stars some sparkle? Just use a transparent jpg to give the stars their glow. </p>

<a href="img/proj1/p6.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p6.jpg"></a>

<p>Half of the battle was sanitizing and organizing the star location data into a format that my web application could read. I learned that python could be used to accomplish that task so with a little help from a friend, learned just enough to extract all of data I needed from the HYG database.</p>
<a href="img/proj1/p7.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/proj1/p7.jpg"></a>
<figcaption>Stars for all the constellations are in place. Wooo!</figcaption>
</div>
';
?>