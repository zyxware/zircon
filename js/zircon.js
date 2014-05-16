(function ($, window, Drupal, drupalSettings) {

  "use strict";
  Drupal.behaviors.zircon = {
    attach: function (context, settings) {
      $('.btn-btt').smoothScroll({speed: 1000});
      if($("#search-block-form [name='keys']").val() === "") {
        $("#search-block-form input[name='keys']").val(Drupal.t("Keywords"));
      }
      $("#search-block-form input[name='keys']").focus(function() {
        if($(this).val() === Drupal.t("Keywords")) {
          $(this).val("");
        }
      }).blur(function() {
        if($(this).val() === "") {
          $(this).val(Drupal.t("Keywords"));
        }
      });      
    }
  };
})(jQuery, this, Drupal, drupalSettings);


