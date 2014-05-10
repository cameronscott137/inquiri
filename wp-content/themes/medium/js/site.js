    
function isMobile() {
    return (
    (navigator.userAgent.match(/Android/i)) ||
    (navigator.userAgent.match(/webOS/i)) ||
    (navigator.userAgent.match(/iPhone/i)) ||
    (navigator.userAgent.match(/iPod/i)) ||
    (navigator.userAgent.match(/iPad/i)) ||
    (navigator.userAgent.match(/BlackBerry/))
    );
}	

  jQuery(document).ready(function($) {

    if(isMobile()) {
          jQuery('.content-single.container-fluid').css('margin-top', '0px');
          jQuery('.entry-header').css('position', 'absolute'); 
          jQuery('.featured-image').css('position', 'static'); 
          jQuery('.home-site-header').css('position', 'absolute');
    }

    /* Social Sharing */
    if(!isMobile()) {
    var sticky = $(".sticky");
    var mark = $(".site-header");
    var article = $("article.entry.row-fluid");
    var content = $(".content-archive");
    var header = $('.home-site-header')
      article.waypoint(function(direction) {
        if (direction == 'down') {
          sticky.fadeIn();
        } else{
          sticky.fadeOut()
        }
      },
      { offset: 50 })
    }

    



    /* LocalScroll*/
    $('.post-navigation.row-fluid').localScroll(
    {
      duration: 700,
      offset: -25
    })

    $('.sticky').localScroll(
    {
      duration: 700,
      offset: -25
    })

	});

  jQuery(window).scroll(function($) {
    if(!isMobile()) {
          scrollPosition = jQuery(this).scrollTop();
          jQuery('.entry-header').css({
            'margin-top' : -(scrollPosition/2)+"px",
            'opacity' : 1-(scrollPosition/300)
          });
          jQuery('.featured-image').css({
            'background-position' : 'center ' + (-scrollPosition/8)+"px"
          }); 
    }
});

