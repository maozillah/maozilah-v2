<?php
$projectTitle = 'China\'s Deadly Air';
$projectTypes = 'data visualization, visual design, research';
$shortDescr = 'A visualization evaluating China\'s progress in improving their air quality by comparing 2014 and 2015.';
$imgUrl = 'aqichina/lrg_img.jpg';
$descrImgUrl = 'aqichina/sml_img.jpg';
$projectDate = 'Winter 2015';

$content = '
<h1>Background</h1>
<p>China\'s air quality has been a point of contention for a number of years. Almost all my family resides in China and I worry about the quality of air that they\'re exposed to. The goal of this project was to present data about China\'s efforts in addressing climate issues in a visualization that the general public could easily understand.</p>
<p>The visualization provides an overview of changes to China\'s air quality as well as a detailed analysis of anomalies.
</p>

<h2>Research Objectives</h2>
<ul>
<li>Understand the current state of China’s air quality in its different regions</li>
<li>Evaluate how air quality has changed since the new environmental policies were enacted by comparing 2014 and 2015</li>
<li>Answer the question: Has China\'s air quality improved from 2014 to 2015?</li>
</ul>
<h2>Data Source</h2>
<p>Approximately 180,000 rows of data was analyzed from the <a href="http://datacenter.mep.gov.cn/report/air_daily/air_dairy.jsp" target="_blank">Chinese ministry of environmental protection database</a></strong></p>
<p><a href="aqichina/China_cities_AQI_2014-2015.csv" target="_blank" class="button">download my dataset</a><br><br> It includes the city name in english, aqi, and date from 2014 to Dec 5, 2015. <em>I don\'t take any responsibility for the validaty or accuracy of this data and it may require further sanitation.</em></p>

<div class="nolinkstyle">
<h1>Highlights</h1>
<a href="img/aqichina/final.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/thumb.jpg"></a>

<p>China has made the effort to monitor air quality in all its cities. 4 of the 5 most populated cities saw improvement in air quality.</p>
<a href="img/aqichina/h2.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/h2.jpg"></a>
<p>As you can see from the amount of green on the map, most cities improved significantly with many improving <strong>more than 25%</strong> from 2014.</p>
<a href="img/aqichina/h1.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/h1.jpg"></a>
<p>Unfortunately Shanghai saw a deterioration in air quality. This may have been due to a lack of significant improvement in the surrounding area as wind patterns circulate pollution throughout an area.  </p>

<h2>The worst got better. The best got worse.</h2>
<p>While the worst cities of 2014 improved, the best two cities of 2014 saw a decline in their air quality. This may indicate unsustainable practices of spreading out polluting industries and moving them farther from target cities.</p>

<h2>A Challenging Road Ahead</h2>
<p>Despite significant improvement in 2015 compared to 2014, experts caution people to be <strong>skeptical</strong> about future improvements to air quality due to:
<ul>
	<li><strong>Polluting and energy hungry industries</strong> still make up too large a part of the economy</li>
	<li><strong>Coal</strong> will remain China\'s primary source of energy in the long term</li>
	<li>No easy way to stem an increase in the number of <strong>vehicles</strong> on China\'s roads</li> 
</ul></p>

<h1>Process</h1>
<p>I took a very fluid approach with this project because I knew that the final result would be depend on the data and insights that revealed themselves through the process. </p>
<p>Initially I could only find macro-level data regarding China\'s air quality such as the average yearly concentration of the fine particle PM2.5 per province.</p>
<h2>Exploration</h2>

<p>At this stage, the focus was on the <em>exploration of different visualizations</em>. I knew that trying to explore manually would be time-consuming so I researched software options. I needed software that would allow me to generate custom chloropleth maps and that I could learn quickly.</p>
<h4>Average yearly concentration of the fine particle PM2.5 per province</h4>
<a href="img/aqichina/p1.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p1.jpg"></a>
<figcaption>Heatmaps and bubble maps misrepresents the data as discrete geographical points when it is actually regional.
</figcaption>

<p>I played around with CartoDB and realized that a chloropleth map would showcase the geographic data best. I narrowed my options down to Google FusionTables and Microsoft Excel. The excel method lacked proper tutorials so I chose FusionTables.
</p>

<h4>PM2.5 concentrations in 2014 and 2015</h4>
<a href="img/aqichina/p2.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p2.jpg"></a>
<figcaption>Gradient chloropleth map. Too many colours made it hard to distinguish the data.
</figcaption>

<a href="img/aqichina/p3.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p3.jpg"></a>
<figcaption>Setting distinct buckets for the different concentrations of PM2.5 clearly shows which areas are have polluted air. Green represents acceptable air pollution. 
</figcaption>
</div>
<h2>Data</h2>
<p>As I was doing more research, I stumbled across the <a href="http://datacenter.mep.gov.cn/report/air_daily/air_dairy.jsp" target="_blank">Chinese ministry of environmental protection database</a>. It includes a wealth of data including daily air quality index data per city per day since the 2000s. <em>Hallelujah.</em> I decided to pivot and work with this detailed data because it would afford me more freedom in analysis.</p>
<h3>Retrieval</h3>
<p>There was approximately 150,000 rows of data from 2014 to 2015 but I needed it in a form that I could analyze like CSV. I knew I\'d have to either write a data scraping script or find one to get this data in a timely manner. Luckily I found <a href="https://github.com/Rudy1224/china-cities-air-quality" target="_blank">one</a>. </p>
<p>Then I hit a few more bumps. Scraping the data took the course of a week due to slow speeds of accessing data from around the world and the server timing out on me every few hours. Sigh.</p>

<div class="nolinkstyle">
<h3>Analysis</h3>
<p>After getting all my data, I needed to sanitize it and get it into an environment where I could analyze it quickly. Some data familiar friends said python notebook was a great choice but I didn\'t have the time to invest in learning. After some research, turns out Excel can do a lot of the same things mySQL does such as complex queries.</p>

<p>An analysis of the dataset itself revealed:
<ul>
	<li>Data was missing for many days/cities.</li>
	<li>There were twice as many entries for 2015 than 2014 due to additional monitoring stations being added.</li>
</ul></p>

<p>
To address these issues:
<ul>
	<li>I merged in a dataset that another individual had scraped for the year 2014 which filled in the missing data.</li>
	<li>Removed all data for cities that were not recorded in 2014 to allow for fair comparison between 2014 and 2015</li>
</ul>
</p>
<a href="img/aqichina/p4.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p4.jpg"></a>
<figcaption>Left: Line graph of number of data entries per day. You can clearly see the dips are where data is missing for certain days. <br>Right: Cities with data missing for 2014 had to be removed.</figcaption>

<h3>Exploration</h3>
<p>Excel allowed me to quickly explore different visualizations for the data I had at hand. Some patterns emerged that inticed me to explore further such as the natural fluctuations in AQI value as seasons change.</p>
<p>At this point, I was overwhelmed with the amount of data and potential visualizations available.</p>
<a href="img/aqichina/p5.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p5.jpg"></a>
<figcaption>Top left: Percentage of types of days for 2014 and 2015. <br>Top right: Scatter plot of AQI levels for 2014 and 2015. <br>Bottom left: Stacked bar graph of different types of days for all cities in 2015. <br>Bottom right: Scatter plot of all AQI values from 2014 to 2015.</figcaption>

<h3>Focusing on the Narrative</h3>
<p>Focusing on answering my research question of "Has China\'s air quality improved?" allowed me to filter out extranneous information and refine my narrative. I struggled with crafting a cohesive flow with the separate elements. Ultimately, I decided to follow the newspaper information architecture as the general public is most familiar with it.</p>
<a href="img/aqichina/p6.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p6.jpg"></a>
<figcaption>Explorations layout in merging seperate visualization elements</figcaption>

<h3>Visual Exploration & Refinement</h3>
<p>At this point I realized that FusionTables won\'t let you export maps into vector images. I didn\'t think about this when I chose software and it bit me in the ass. Luckily I was able to find a vector of the Chinese provinces.</p>
<a href="img/aqichina/p7.jpg" target="_blank"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/aqichina/p7.jpg"></a>
<figcaption>Explorations of various details such as images, textures, and type.</figcaption>

<h2>Project Critiques</h2>
<p>This project was a massive undertaking but I\'m pretty happy with the result. However there are a few things that I\'m unsatisfied with.</p>
<ul>
	<li>There is potential with the use of greens and reds to indicate the severity of air quality because they are colours people associate with severity. Unfortunately, the colours for the Changes in air quality map is very similar to the colours for the AQI range maps. This may confuse viewers and requires further exploration.</li>
	<li>Currently, the city labels requires viewers to reference numbers to the far right. Further exploration of labelling techniques such as extended lines may improve the user experience of the visualization.</li>
	<li>While the horizontal layout works, there wasn\'t enough layout explorations. There may be a more cohesive layout that highlights the narrative better.</li>
</ul>

<h2>Learnings</h2>
<ul>
	<li>Leave enough time for <strong>troubleshooting</strong>. Many of the things I predicted would go smoothly didn\'t.</li>
	<li>It\'s important to research with the <em>proper language</em> (e.g. cities are called prefrectures in China), and in my case, in the right language, Mandarin, to get the best results.</li>
	<li>I wasted a lot of time <strong>thinking too far ahead</strong> and learned software, or researched information I thought I might need. In the future, I\'ll try not invest too much time into tasks before I\'ve made an informed decision.</li>
	<li>Make sure I define my criteria for software holistically, taking into considerations my needs throughout the process.</li>
</ul>
</div>

';
?>