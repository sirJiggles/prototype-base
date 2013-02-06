/*
 * Main javascript file
 * 
 * @author Gareth Fuller
 */


/* Document ready function */
$(document).ready(function() {

    
    $('html').removeClass('no-js');

    
    /* Accordian */
    if ($('#accordian').length > 0){
        accordianJs();
    }

    /* Gallery */
    if ($('#gallery').length > 0){
        galleryJs();
    }
    
    /* Mobile navigation */    
    if ( $('.mobile-nav').length > 0 ){

        // click event for mobile button
        $('.mobile-nav').click(function(e){
            e.preventDefault();
            mobileNavToggle();

        });

    }

    
});

/* Function for the accordan */
function accordianJs(){
    
    $('.accordian-slide').slideUp();
    
    $('#accordian a').click(function(e){
        
        e.preventDefault();
        
        if (!$(this).hasClass('open')){
            
            $('.accordian-slide').slideUp();
            $(this).next().slideToggle();
            $('#accordian a').removeClass('open');
            $(this).toggleClass('open');
            
        }
    })
}

/* Function for the mobile navigation */
function mobileNavToggle(){
    
    $('.mobile-nav').toggleClass('active');

    $('body').toggleClass('css-nav-open');

    if( $('body').hasClass('css-nav-open') ){

        // swipe event for controlling the nav
        hammer = new Hammer(document.getElementById("main-wrapper"));

        hammer.onswipe = function(event){
            if(event.direction == 'left'){
                mobileNavToggle();
            }
        }

    }else{
        // remove the swipe event (to regain control)
        hammer.destroy()
    }  

    // CSS METHOD FIRST
    if (supports('transition')){
        return true;
    }

    // JS METHOD
    var speed = 500;
    if ($('.mobile-nav').hasClass('active')){
       
        $('#main-nav').stop().animate({
            left: '0' 
        }, speed);
        $('#main').stop().animate({
            left: '70%'
        }, speed);

    }else{
        
        $('#main-nav').stop().animate({
            left: '-100%' 
        }, speed);
        $('#main').stop().animate({
            left: '0'
        }, speed);
    }
}


/* function to init the gallery */
function galleryJs(){
    
    var gallery = new GarethGallery({   'element'      :'gallery-inner',
                                        'leftButton'   : 'previous-button',
                                        'rightButton'  : 'next-button',
                                        'thumbnails'   : 'thumbnails-inner',
                                        'thumbLeft'    : 'previous-button-icons',
                                        'thumbRight'   : 'next-button-icons',
                                        'swapImages'   : true,
                                        'touch'        : true,
                                        'progressBar'  : 'status'
                                        });
    gallery.start();
}


/* Supports function for js fallback on css3 animations */
var supports = (function(prop) {  
  
    var vendors = 'ms O Moz Webkit'.split(' ');
    
    // check for standard support
    if ( prop in document.documentElement.style ) return true;  

    //check for cammal case one word support
    var propParts = prop.split('-');
    var propCamel = propParts[0];
    for(var i=1,len=propParts.length; i<len; i++){
        propCamel += propParts[i].replace(/^[a-z]/, function(val) {  
            return val.toUpperCase();  
        });
    };
    
    if ( propCamel in document.documentElement.style ) return true;
   
    
    prop = prop.replace(/^[a-z]/, function(val) {  
        return val.toUpperCase();  
    });
    
    var len = vendors.length;
    
    while(len--) {  
        if ( vendors[len] + prop in document.documentElement.style ) {  
            return true;
        }  
    } 
    return false;  

});


function isTouchDevice() {

    if ("ontouchstart" in document.documentElement)
    {
      return true;
    }
    else
    {
      return false;
    }
}
