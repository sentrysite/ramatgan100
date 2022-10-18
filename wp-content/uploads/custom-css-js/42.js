<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
	
	//NavUp
    var scroll = $(window).scrollTop();
    if (scroll != 0) {
      $('body').addClass('nav-up');
    }
  
    $(function () {
        $(window).scroll(function () {
            var top_offset = $(window).scrollTop();
            if (top_offset == 0) {
                $('body').removeClass('nav-up');
            }
        })
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
          if (scroll >= 300) {
              $('body').addClass('nav-up');
          }
    });
	
  
    //Open Side Menu
    $(".mobile-menu-btn").click(function() {
      $('.navigation').toggleClass("navigation-is-open");
      $( ".mobile-menu-btn" ).toggleClass('open');
      $( "body" ).toggleClass('page-is-open');
    });
    $(".close-all").click(function() {
      $('.navigation').removeClass("navigation-is-open");
      $( ".mobile-menu-btn" ).removeClass('open');
      $( "body" ).removeClass('page-is-open');
    });

    $(".menu-item").click(function() {
      if($(this).hasClass("menu-item-has-children")){
         $(this).toggleClass("show-childrens");
      }
      else{
        $('.navigation').removeClass("navigation-is-open");
        $( ".mobile-menu-btn" ).removeClass('open');
        $( "body" ).removeClass('page-is-open');
      }
    });


    //Back To Top
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

});


</script>
<!-- end Simple Custom CSS and JS -->
