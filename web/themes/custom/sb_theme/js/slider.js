const sbSlider = ($) => {
  Drupal.behaviors.sbSlider = {
    attach(context) {
      $(document, context).ready(function(){
        $('.slider__tabs').slick({
          infinite: true,
          autoplay: false,
          dots: false,
          slidesToShow: 1,
          cssEase: 'ease-in-out',
          arrows: true,
          responsive: [
            {
              breakpoint: 1800,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                
              },
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
              },
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                centerMode: true,
                variableWidth: true, 
                arrows: false, 
                dots: true
              },
            },
          ],
        });
      });

      $('.nav-item').click(function(){
        $('.slider__tabs').slick('refresh');
      });

      $('.slick-previous').click(function(){
        $('.slick-prev.slick-arrow').click();
      });

      $('.slick-next').click(function(){
        $('.slick-next.slick-arrow').click();
      });
    },
  };


  $(document).ready(function () {
      $("#nav-tabContent-article").hide();
      $("#nav-tabContent-basic").hide();
      $("#nav-tabContent-sb").show();
      
    $("#nav-profile-tab").click(function(){
      $("#nav-tabContent-article").show();
      $("#nav-tabContent-basic").hide();
      $("#nav-tabContent-sb").hide();
    });
    $("#nav-contact-tab").click(function(){
      $("#nav-tabContent-article").hide();
      $("#nav-tabContent-basic").show();
      $("#nav-tabContent-sb").hide();
    });
    $("#nav-home-tab").click(function(){
      $("#nav-tabContent-article").hide();
      $("#nav-tabContent-basic").hide();
      $("#nav-tabContent-sb").show();
    });
  });


};
sbSlider(jQuery);

