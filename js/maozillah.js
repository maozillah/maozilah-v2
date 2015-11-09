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

      // menu animation
      $(".nav-toggle").click(function() {
          $(this).toggleClass("active");
      });

      // Hide on scroll down
      $('.right').on('DOMMouseScroll mousewheel', function(e) {
          if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
              //scroll down
              console.log('Down');
              $(".main").addClass("hide-nav");
          } else {
              //scroll up
              console.log('Up');
              $(".main").removeClass("hide-nav");
          }
      });

  });