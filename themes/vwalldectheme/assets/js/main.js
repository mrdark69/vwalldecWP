function initMap(){
    var where = {lat: 40.730610, lng: -73.935242};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: where,
        zoom: 15,
        scrollwheel: false,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    });
    var marker = new google.maps.Marker({
        position: where,
        map: map
    });
}

retinajs();

jQuery("#slider-animation").typed({
    strings: ["HELLO!", "CZEŚĆ!", "Ahoj!", "你好!", "Hallo!", "Salut!", "Hola!", "Ciao!", "Oi!", "Godan!", "Здравствуй!", "Chào!"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 2000,
    loop: true
});

jQuery(window).scroll(function(){
    if( jQuery(window).scrollTop() > 70){
        jQuery('.header_dynamic').removeClass('header_white').css({
            'background-color': '#ffffff'
        });
    }else{
        jQuery('.header_dynamic').addClass('header_white').css({
            'background-color': ''
        })
    }
});

jQuery(window).on('load', function () {
    jQuery('.gallery-masonry').masonry({
        itemSelector: '.gallery-masonry-item',
        columnWidth: '.gallery-masonry-sizer',
        gutter: 30,
        percentPosition: true,
        originLeft: true
    });
});

jQuery(document).ready(function(){

    jQuery(document).on('click', '.menu', function () {
        jQuery('#nav_overlay').css('left', '0');
    });

    jQuery(document).on('click', '.close_btn', function () {
        jQuery('#nav_overlay').css('left', '-100%');
    });

    jQuery(".animsition").animsition();

    jQuery('.my-gallery').magnificPopup({
        delegate: 'a',
        type:'image',
        gallery: {
            enabled: true
        },
        mainClass: 'mfp-fade'
    });

    jQuery(".opinions").owlCarousel({
        // loop:true,
        margin:10,
        nav:true,
        navText: ['', ''],
        responsive:{
            0:{
                items:1
            }
        }
    });

    jQuery('.full_slider_arrow').on('click', function(){
       jQuery('html, body').animate({
           scrollTop: jQuery(window).height() - jQuery('header').height()
       }, 500);
    });
});




