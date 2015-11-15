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
          $('html').addClass( 'noscroll' )         
               .css( { top: -lastTop } );  
          $('.main').css( { top: 0 } );          
      }

      function continueScrolling() {                    
          $('html').removeClass( 'noscroll' );      
          $(window).scrollTop( lastTop );       
      }   

  $(document).ready(function() {

      // preloader

      $(window).load(function() {
          $('#preloader').fadeOut('slow', function() {
              $(this).remove();
          });
      });


      // $('.leftmenu').on('touchmove', function(e)
      // {
      //     stopScrolling();
      // });          

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