$(document).ready(function(){

  // init FlexSlider
  // ------------------------------------------------------------------------
  $('.flexslider').flexslider({
    slideshow: false,
    directionNav: false
  });

  // Fit Footer Headings
  // ------------------------------------------------------------------------
  $(".footer h3, .cta.big-cta,h2").fitText(0.8, { maxFontSize: '30px' });

  // toggle FAQs
  // ------------------------------------------------------------------------
  $(".faq-q a").on('click', function(e) {
    $(this).parent().parent().parent().next().stop().stop().slideToggle("slow");
    $(this).closest(".faq").toggleClass("active-faq");
    $(this).closest(".faq").siblings().removeClass("active-faq")
    $(this).closest(".faq").siblings().children(".faq-a").slideUp("slow");
    e.preventDefault();
  });  

  // cc field validation
  // https://github.com/stripe/jquery.payment
  // ------------------------------------------------------------------------
  $('[data-numeric]').payment('restrictNumeric');
  $('.cc-number').payment('formatCardNumber');
  $('.cc-exp').payment('formatCardExpiry');
  $('.cc-cvc').payment('formatCardCVC');

  $('form.has-payment').submit(function(e){
    e.preventDefault();
    $('input').removeClass('invalid');
    $('.validation-feedback').removeClass('passed failed');

    var cardType = $.payment.cardType($('.cc-number').val());

    $('.cc-number').toggleClass('invalid', !$.payment.validateCardNumber($('.cc-number').val()));
    $('.cc-exp').toggleClass('invalid', !$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
    $('.cc-cvc').toggleClass('invalid', !$.payment.validateCardCVC($('.cc-cvc').val(), cardType));

    if ( $('input.invalid').length ) {
      $('.validation-feedback').addClass('failed');
    } else {
      $('.validation-feedback').addClass('passed');
    }
  });

  // toggle payment fields
  // ------------------------------------------------------------------------
  $(".toggle-cc-fields").on('click', function(e) {
    $(this).toggleClass("active-fields");
    $(".paypal-fields").removeClass("active-fields");
    $(".cc-fields").stop().stop().slideToggle("slow");
    e.preventDefault();
  });  

  // toggle pp fields
  // ------------------------------------------------------------------------
  $(".paypal-fields").on('click', function(e) {
    $(this).toggleClass("active-fields");
    $(".toggle-cc-fields").removeClass("active-fields");
    $(".cc-fields").stop().stop().slideUp("slow");
    e.preventDefault();
  });  

  // off-canvas nav
  // ------------------------------------------------------------------------
  $('.toggle-off-canvas').on('click',function (e) {
    $( '.on-canvas' ).toggleClass( "push-it" ).toggleClass('push-it-right');
    $( 'body' ).toggleClass( "freeze" );
    $('.canvas-overlay').show();
      e.preventDefault();
  });  
  $('.canvas-overlay').on('click',function () {
    $('.on-canvas' ).removeClass( "push-it" ).removeClass('push-it-right');
    $( 'body' ).removeClass( "freeze" );
    $(this).hide();
  });   

});