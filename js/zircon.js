(function ($) {
Drupal.behaviors.actionZircon = {
  attach: function (context) {
	$(window).load(function() {
	  window.setTimeout(function() {
	    Drupal.Zircon.equalHeight($('#panel-first-wrapper .block-inner'));
	    Drupal.Zircon.equalHeight($('#panel-second-wrapper .block-inner'))
	    Drupal.Zircon.equalHeight($('#panel-third-wrapper .block-inner'));
	    Drupal.Zircon.equalHeight($('.region-content .views-view-grid .views-col .grid-inner'));
	  }, 100);
	});
    Drupal.Zircon.putLabelToInput("search_block_form", "Search...");
    $('#subscribe').find('input[type="submit"]').val(Drupal.t("Go"));
  }
};

Drupal.Zircon = {};
Drupal.Zircon.putLabelToInput = function(name, text) {
  jQuery('input[name="' + name + '"]').val(Drupal.t(text));
  jQuery('input[name="' + name + '"]').focus(function(){
    if(this.value == Drupal.t(text)) {
      this.value='';
    }
  }).blur(function(){
    if(this.value == '') {
      this.value=Drupal.t(text);
    }
  });	  
}

Drupal.Zircon.equalHeight = function(elements) {
  highest = 0;
  elements.each(function() {
    if($(this).innerHeight() > highest) {
      highest = $(this).outerHeight();
    }
  });
  return elements.each(function() {
    padding = $(this).innerHeight() - $(this).height();
    extra = padding + ($(this).outerHeight() - $(this).innerHeight());
    if(($.browser.msie && $.browser.version == 6.0)) {
      $(this).css({'height': highest - extra, 'overflow': 'hidden'});
    }
    else {
      $(this).css({'min-height': highest - extra});
    }
  });
}
})(jQuery);
