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

/* ========================================================================= */
/*	Google Map
/* =========================================================================  */

function initMap() {
  var chicago = new google.maps.LatLng(-7.779261, 110.415901);

  var map = new google.maps.Map(document.getElementById('map'), {
      center: chicago,
      zoom: 18
  });

  var coordInfoWindow = new google.maps.InfoWindow();
  coordInfoWindow.setContent(createInfoWindowContent(chicago, map.getZoom()));
  coordInfoWindow.setPosition(chicago);
  coordInfoWindow.open(map);

  map.addListener('zoom_changed', function() {
      coordInfoWindow.setContent(createInfoWindowContent(chicago, map.getZoom()));
      coordInfoWindow.open(map);
  });
}

var TILE_SIZE = 256;

function createInfoWindowContent(latLng, zoom) {
  var scale = 1 << zoom;

  var worldCoordinate = project(latLng);

  var pixelCoordinate = new google.maps.Point(
      Math.floor(worldCoordinate.x * scale),
      Math.floor(worldCoordinate.y * scale));

  var tileCoordinate = new google.maps.Point(
      Math.floor(worldCoordinate.x * scale / TILE_SIZE),
      Math.floor(worldCoordinate.y * scale / TILE_SIZE));

  return [
      'Iconic Shoe&Laundry',
      'Jl. Babarsari No.44, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281'
  ].join('<br>');
}

// The mapping between latitude, longitude and pixels is defined by the web
// mercator projection.
function project(latLng) {
  var siny = Math.sin(latLng.lat() * Math.PI / 180);

  // Truncating to 0.9999 effectively limits latitude to 89.189. This is
  // about a third of a tile past the edge of the world tile.
  siny = Math.min(Math.max(siny, -0.9999), 0.9999);

  return new google.maps.Point(
      TILE_SIZE * (0.5 + latLng.lng() / 360),
      TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
}
var marker = new google.maps.Marker({
  map: map,
  position: cairo
});
marker.addListener('click', function() {
  infowindow.open(map, marker);
});
 	















