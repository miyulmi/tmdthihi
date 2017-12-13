$(document).ready(function () {
  $('.g-menu-item-container').click(function (event) {
    event.preventDefault();
    var selector = "#" + $(this).attr('session');
    var href = $(this).attr('href');
    if (location.pathname != '/') { 
      localStorage.setItem('selector', selector);
      location.href = "/";
    }
    
    $('.g-toplevel').children().removeClass('active');
    $(this).parent().addClass('active');

    $('html, body').animate({
      scrollTop: $(selector).offset().top
    }, 500);
  });

  // if (localStorage.getItem('selector') != null) {
  //   $('html, body').animate({
  //     scrollTop: $(localStorage.getItem('selector')).offset().top
  //   }, 0);
  //   localStorage.removeItem('selector');
  // }
});



$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$("#g-navigation").addClass("scrolled");
	} else {
		$("#g-navigation").removeClass("scrolled");
	}


  var cutoff = $(window).scrollTop();
	
  $("section[id^='g-']").add("header[id^='g-']").not("[id^='g-navigation']").each(function () {
    if ($(this).offset().top + $(this).height() / 2 > cutoff) {
      $("[section-btn]").removeClass('active');
      $("[section-btn='" + $(this).attr('id') + "']").addClass("active");
      return false;
    }
  });

});