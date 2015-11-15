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

  $(document).ready(function() {

      // preloader

      $(window).load(function() {
          $('#preloader').fadeOut('slow', function() {
              $(this).remove();
          });
      });

      $('.left, .sidemenu').bind('mousewheel DOMMouseScroll', function(e) {   
          var e0 = e.originalEvent,    
              delta = e0.wheelDelta || -e0.detail;   
   
          this.scrollTop += (delta < 0 ? 1 : -1) * 30;   
          e.preventDefault();    
       });

      // menu animation
      $(".nav-toggle").click(function() {
          $(this).toggleClass("active");
      });

      // Hide on scroll down
      var previousScroll = 0;
      $('.right').add(window).scroll(function(event) {
          var scroll = $(this).scrollTop();
          if (scroll > previousScroll) {
              console.log('Down');
              $(".main").addClass("hide-nav");
          } else {
              console.log('Up');
              $(".main").removeClass("hide-nav");
          }
          previousScroll = scroll;
      });
  });