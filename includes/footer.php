
        <script src="js/minified/script.js"></script>
        <?php echo getScripts(); ?>

        <script>


		$(document).click(function(event) { 
			if ($( "#cbp-spmenu-s1" ).hasClass( "cbp-spmenu-open" )) {
			    if(!$(event.target).closest('#showLeftPush').length) {
			        classie.toggle(showLeftPush, 'active');
		            classie.toggle(body, 'cbp-spmenu-push-toright');
		            classie.toggle(menuLeft, 'cbp-spmenu-open');
		            disableOther('showLeftPush');

		            scroll =!scroll;

		            if (scroll) {
					stopScrolling();
					} else {
					continueScrolling();
					}

		            $("#folder").toggle();
         			$("#open_folder").toggle();
			    }        
			}

			if ($( "#cbp-spmenu-s2" ).hasClass( "cbp-spmenu-open" )) {
			    if(!$(event.target).closest('#showRightPush,.cbp-spmenu').length) {

			        classie.toggle(showRightPush, 'active');
				      classie.toggle(body, 'cbp-spmenu-push-toleft');
				      classie.toggle(menuRight, 'cbp-spmenu-open');
				      disableOther('showRightPush');
			    }        
			}
		})

		 
		</script>

        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-71907623-1', 'auto');
		  ga('send', 'pageview');
		</script>
    </body>
</html>