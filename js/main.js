$('.carousel').carousel({
    interval: 25000
});

$(document).ready(function() {
	$('.provide_block').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.provide_img_block').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.best_left').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.best_right').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.best_up').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.consultation').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.best_title').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      classToRemove: 'hidden',
      offset: 100
  });
  $('.work_one').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight'
  });
  $('.work_two').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight'
  });
  $('.work_three').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight'
  });
  $('.work_four').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInRight'
  });
  $('.work_five').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInLeft delay-1s'
  });
  $('.people').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      callbackFunction: function() {
        var
            count = 1,
            block = $( '.people' ),
            interval = setInterval( function () {
              count++;
              block.text( count );
              if( count === 270 ) {
                clearInterval( interval );
              }
            }, 1 );
          block.text( count );
      }
  });
  $('.busines').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeIn',
    callbackFunction: function() {
      var
          count = 1,
          block = $( '.busines' ),
          interval = setInterval( function () {
            count++;
            block.text( count );
            if( count === 150 ) {
              clearInterval( interval );
            }
          }, 1 );
        block.text( count );
      }
  });
  $('.language').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeIn',
    callbackFunction: function() {
      var
          count = 456,
          block = $( '.language' ),
          interval = setInterval( function () {
            count++;
            block.text( count );
            if( count === 740 ) {
              clearInterval( interval );
            }
          }, 1 );
        block.text( count );
      }
  });
  $('.houses').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeIn',
    callbackFunction: function() {
      var
          count = 1,
          block = $( '.houses' ),
          interval = setInterval( function () {
            count++;
            block.text( count );
            if( count === 130 ) {
              clearInterval( interval );
            }
          }, 1 );
        block.text( count );
      }
  });
  $('.collapsed').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp'
  });
  $('.form_faq').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn'
  });
  $('#testimonialCarousel .carousel-item').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      classToRemove: 'hidden',
      offset: 10
  });
  $('.people_img').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      classToRemove: 'hidden',
      offset: 10
  });
  $('.contact_block').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp'
  });
  $('.form_contact').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn'
  });
  $('.map').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeInUp'
  });
});


$('#main_carousel').find('.carousel-item').each(function (index, item) {
  var carouselItem = $(item).find('.carousel-number');

  if (carouselItem.length > 0) {
    carouselItem.text(index + 1);
  }
});

var slidesLength = $('#main_carousel').find('.carousel-item').length;
$('.last-number').text(slidesLength);

$(document).ready(function(){
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }
});

// Main Menu
function openNav() {
  var x = window.matchMedia("(max-width:900px)");

  if (x.matches) {
      document.getElementById("mySidepanel").style.width = "80%";
  } else {
      document.getElementById("mySidepanel").style.width = "35%";
  }
};

$('.header_menu_link').click( function(){
  document.getElementById("mySidepanel").style.width = "0";
});
  
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
};

window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
  document.getElementById("toTop").style.display = "block";
  } else {
  document.getElementById("toTop").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$(document).ready(function() {
  var ww = 	$(window).width();
  if (ww <= 800) {
    var myDiv = $('.testimonials .testimonial');
    myDiv.text(myDiv.text().substring(0,300) + '...')
  } else {
    return;
  }
});
