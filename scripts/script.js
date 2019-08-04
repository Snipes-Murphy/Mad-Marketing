window.onscroll = function() {
  if ( window.pageYOffset > 50 ) {
    $(document).find("#navbar").addClass("navbar-active");
  } else {
    $(document).find("#navbar").removeClass("navbar-active");
  }
}
