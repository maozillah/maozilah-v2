 // preloader

 function init() {
var imgDefer = document.getElementsByTagName('img');
for (var i=0; i<imgDefer.length; i++) {
if(imgDefer[i].getAttribute('data-src')) {
imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
} } }
window.onload = init;

  $(window).load(function() {
      $('#preloader').fadeOut('slow', function() {
          $(this).remove();
      });
  });

  var menuRight = document.getElementById('cbp-spmenu-s2'),
      showRightPush = document.getElementById('showRightPush'),
      body = document.body;

  showRightPush.onclick = function() {
      classie.toggle(this, 'active');
      classie.toggle(body, 'cbp-spmenu-push-toleft');
      classie.toggle(menuRight, 'cbp-spmenu-open');
      disableOther('showRightPush');
  }

  function disableOther(button) {
      if (button !== 'showRightPush') {
          classie.toggle(showRightPush, 'disabled');
      }
  }

  var scroll = false;
  var lastTop;

  function stopScrolling() {
      lastTop = $(window).scrollTop();
      $('html').addClass('noscroll')
          .css({
              top: -lastTop
          });
      $('.main').css({
          top: 0
      });
  }

  function continueScrolling() {
      $('html').removeClass('noscroll');
      $(window).scrollTop(lastTop);
  }

  $(document).ready(function() {

      // menu animation
      $(".nav-toggle").click(function() {
          $(this).toggleClass("active");
      });

      // project menu animation
      $("#open_folder").hide();

      $("#showLeftPush").click(function() {
          $("#folder").toggle();
          $("#open_folder").toggle();
      });

      // Hide on scroll down
      var previousScroll = 0;
      $('.right').add(window).scroll(function(event) {
          var scroll = $(this).scrollTop();
          if (scroll > previousScroll) {
              $(".main").addClass("hide-nav");
          } else {
              $(".main").removeClass("hide-nav");
          }
          previousScroll = scroll;
      });

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
    });

  });