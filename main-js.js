

//Navbar dynamic opacity
$(document).ready(function(){
    $(window).scroll(function() {
        var photoDiv = document.querySelector('#photo_area');
        // Get it's position in the viewport
        var photoViewPortY = photoDiv.getBoundingClientRect().y;

        if(photoViewPortY > 200){
          $('.navbar').removeClass('solid');
        }   
        else  {
          $('.navbar').addClass('solid');
          //navbarDynamicOpacity();
        }
        });

});

//Smooth scrolling function 
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".nav-link").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
            scrollTop: $(hash).offset().top - 60
        }, 800);

    } // End if
  });
});
