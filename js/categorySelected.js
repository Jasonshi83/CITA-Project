function myFunction(category) {

  document.getElementsByClassName("user-name")[0].textContent = category;

}

// ========================================
/* jquery toogle class */
/* make color stay when clicked on element */

(function($) {
	$(document).ready( function() {
  	$('.sub-category-mode').click( function() {
    	$('.sub-category-mode').removeClass('active');
      $(this).addClass('active');
    });
  });
})(jQuery);
//====================================================

