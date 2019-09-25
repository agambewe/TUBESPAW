(function ($) { 'use strict';
	
  $('#password').on('keyup', function () {
    if ($('#passw').val() == $('#password').val()) {
      $('#message').html('Matching').css('color', 'green');
    } else 
      $('#message').html('Not Matching').css('color', 'red');
  });
	
  $(document).ready(function () {

      $("#formABC").submit(function (e) {
          //stop submitting the form to see the disabled button effect
          e.preventDefault();
          //disable the submit button
          $("#btnSubmit").attr("disabled", true);
          //disable a normal button
          $("#btnTest").attr("disabled", true);

          return true;

      });
  });

	// Preloader
	$(window).on('load',function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});

	// e-commerce touchspin
	$("input[name='product-quantity']").TouchSpin();


	// Video Lightbox
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
	    event.preventDefault();
	    $(this).ekkoLightbox();
	});
	

// Revolution Slider Init
  var tpj=jQuery;
      var revapi26;
      tpj(document).ready(function() {
        if(tpj("#home_slider").revolution == undefined){
          revslider_showDoubleJqueryError("#home_slider");
        }else{
          revapi26 = tpj("#home_slider").show().revolution({
            sliderType:"standard",
            jsFileLocation:"revolution/js/",
            sliderLayout:"fullscreen",
            dottedOverlay:"none",
            delay:4000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
              mouseScrollReverse:"default",
              onHoverStop:"off",
              touch:{
                touchenabled:"on",
                touchOnDesktop:"off",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style: 'zeus',
                enable:true,
                hide_under:778,
                hide_onleave:false,
                      tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div></div>',
              }

              ,
              bullets: {
                enable:true,
                hide_onmobile:false,
                style:"bullet-bar",
                hide_onleave:false,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:''
              }
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[868,768,960,720],
            lazyType:"none",
            parallax: {
              type:"scroll",
              origo:"slidercenter",
              speed:2000,
              levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
            },
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            fullScreenAutoWidth:"off",
            fullScreenAlignForce:"off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); /*ready*/
      
})(jQuery);
 	















