//@codekit-prepend "collapse.js"
//@codekit-prepend "dropdown.js"
//@codekit-prepend "transition.js"
//@codekit-prepend "modal.js"
//@codekit-prepend "html5shiv.js"
//@codekit-prepend "respond.min.js"
//@codekit-prepend "transition.js"

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

jQuery(window).scroll(function() {
		var scroll = jQuery(window).scrollTop();
		var nav = jQuery(".navbar.scroll");
		if (scroll >= 500) {
			jQuery(nav).addClass("animate-in");
		} else {
			jQuery(nav).removeClass("animate-in");
		}
});