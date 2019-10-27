function navbarDynamicOpacity() {
    var scrollPosition = $(document).scrollTop();
    var opacityLevel = 1;
    scrollPosition < 1000 ? opacityLevel = '0.'+ (scrollPosition * 100) / 10 : opacityLevel;
    $('#sticky-navbar').css({
        'background-color': 'rgba(175, 70, 70, '+ opacityLevel +')'
    });
    console.log(scrollPosition, opacityLevel);
};

$(document).ready(function() {
    console.log("Main-JS loaded.");
    $(document).scroll(function() {
            navbarDynamicOpacity();
        });

});
