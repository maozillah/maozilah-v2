  var menuRight = document.getElementById('cbp-spmenu-s2'),
      showRightPush = document.getElementById('showRightPush'),
      body = document.body;

  showRightPush.onclick = function() {
      classie.toggle(this, 'active');
      classie.toggle(body, 'cbp-spmenu-push-toleft');
      classie.toggle(menuRight, 'cbp-spmenu-open');
      disableOther('showRightPush');
  };

  function disableOther(button) {

      if (button !== 'showRightPush') {
          classie.toggle(showRightPush, 'disabled');
      }
  }

  $(document).ready(function() {

//     $('html').flowtype({
//  minimum   : 500,
//  maximum   : 1200,
//  minFont   : 12,
//  maxFont   : 40,
//  fontRatio : 60
// });

      // preloader

      $(window).load(function() {
          $('#preloader').fadeOut('slow', function() {
              $(this).remove();
          });
      });

      // menu animation

      $(".example5").click(function() {
          $(this).toggleClass("open");
      });

      // bind scrolling to div left

      // $('#left, #cbp-spmenu-s1').bind('mousewheel DOMMouseScroll', function(e) {
      //     var e0 = e.originalEvent,
      //         delta = e0.wheelDelta || -e0.detail;

      //     this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      //     e.preventDefault();
      // });

      // Hide Header on on scroll down
      var didScroll;
      var lastScrollTop = 0;
      var navbarHeight = $('.main').outerHeight();

      $(window).scroll(function(event) {
          didScroll = true;
      });

      setInterval(function() {
          if (didScroll) {
              hasScrolled();
              didScroll = false;
          }
      }, 250);

      function hasScrolled() {
          var st = $(this).scrollTop();

          // Make sure they scroll more than delta

          // This is necessary so you never see what is "behind" the navbar.
          if (st > lastScrollTop && st > navbarHeight) {
              // Scroll Down
              $('.main').removeClass('nav-down').addClass('nav-up');
          } else {
              // Scroll Up
              if (st + $(window).height() < $(document).height()) {
                  $('.main').removeClass('nav-up').addClass('nav-down');
              }
          }

          lastScrollTop = st;
      }

  });

  // remove hovers for mobile

  var touch = window.ontouchstart
            || navigator.MaxTouchPoints > 0
            || navigator.msMaxTouchPoints > 0;

if (touch) { // remove all :hover stylesheets
    try { // prevent crash on browsers not supporting DOM styleSheets properly
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;

            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;

                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    stylesheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}
}