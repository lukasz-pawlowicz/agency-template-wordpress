jQuery( document ).ready( function( $ ) {

    //==========PARALLAX EFFECT==========// 
    $(function() {
        var $window = $(window);  
        $('header[data-type="background"]').each(function(){
            var $bgobj = $(this); // assigning the object
            $(window).scroll(function() {
                // Scroll the background at var speed
                // the yPos is a negative value because we're scrolling it UP!                              
                var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                // Put together our final background position
                var coords = '50% '+ yPos + 'px';
                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            }); // end window scroll
        });
    });
    $(function() {
        var $window = $(window);  
        $('section[data-type="background"]').each(function(){
            var $bgobj = $(this); // assigning the object
            $(window).scroll(function() {
                // Scroll the background at var speed
                // the yPos is a negative value because we're scrolling it UP!                              
                var yPos = -($window.scrollTop() / $bgobj.data('speed'));
                // Put together our final background position
                var coords = '50% '+ yPos + 'px';
                // Move the background
                $bgobj.css({ backgroundPosition: coords });
            }); // end window scroll
        });
    });

    //==========SCROLL NAVBAR EFFECT==========// 
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $(".navbar-fixed-top").css("background-color", "rgba(255, 255, 255, 0.8)"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent").delay(200); // if not, change it back to transparent
        }
      });
    });

    //==========REMOVE EMPTY PARAGRAPHS==========//
    $('p:empty').remove();

    //==========GOOGLE MAPS==========//
    var map;
    function initialize() {
        var mapPos = new google.maps.LatLng( 51.239754,22.553387 ),
        image = 'http://i67.tinypic.com/5jy5bt.png',
        mapId = document.getElementById('map'),
        mapOptions = {
            scrollwheel: false,
            zoom: 15,
            center: mapPos
        },
        map = new google.maps.Map(mapId,mapOptions), 
        marker = new google.maps.Marker({       
            position: mapPos,  
            map: map,
            icon: image
        }); 
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});