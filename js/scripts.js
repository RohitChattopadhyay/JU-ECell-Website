
$(window).load(function() {
                function showhead(){
                    $('.headingz').animate({
                  'opacity': '1'
                 } , 2000 );
                };
                window.setTimeout( showhead, 300);
               
                
            });
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});




		$(document).ready(function(){ 
			$(window).scroll(function(){ 
        if ($(this).scrollTop() > 350) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
		}); 
			$('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 700); 
        return false; 
		}); 
		});
  

$(document).ready(function(){

  var a = 0;
$(window).scroll(function() {
  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            
          }

        });
    });
    a = 1;
  }

});
});



        $(document).ready(function(){
          $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            dots: true,
            autoplay: true,
            adaptiveHeight: true,
            infinite: false,
           useTransform: true,
            speed: 400
          });
         
          $('.slider-nav')
            .on('init', function(event, slick) {
              $('.slider-nav .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
              slidesToShow: 10,
              slidesToScroll: 10,
              dots: true,
              arrows: true , 
              autoplay: true , 
              focusOnSelect: false,
              infinite: false,
              responsive: [{
                breakpoint: 1024,
                settings: {
                  slidesToShow: 5,
                  slidesToScroll: 5,
                }
              }, {
                breakpoint: 640,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 4,
               }
              }, {
                breakpoint: 420,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
             }
              }]
            });
         
          $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
          });
         
          $('.slider-nav').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');
         
            $('.slider-single').slick('slickGoTo', goToSingleSlide);
          });
});
	
