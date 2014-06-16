(function ($, Drupal) {

  Drupal.behaviors.vigtrucking = {
    attach: function(context, settings) {
      // Get your Yeti started.
    }
  };

  //seach for all toggle ul classes to hide them.
  $('.toggle').hide();

  var $controller = $('.toggle-controller');

  //slidetoggle the images below the title.
  $controller.click(function(event) {
    $(this).next('ul').slideToggle();
    event.preventDefault();
  });

  $controller.hover(function() {
    $(this).animate({
      left: ["+=15", "swing"]},
      200);
  }, function() {
    $(this).animate({
      left: ["-=15", "linear"]},
      400);
  });



})(jQuery, Drupal);

