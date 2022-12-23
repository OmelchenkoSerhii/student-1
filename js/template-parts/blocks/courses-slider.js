import $  from 'jquery';
import 'slick-carousel';

function coursesSlider(){
        $('.courses-slider').each(function(){
                let block = $(this);
                let slider = $(this).find('.courses-slider__list');


                slider.slick({
                        dots: false,
                        arrows: true,
                        infinite: true,
                        speed: 500,
                        cssEase: 'linear',
                        adaptiveHeight: true,
                        autoplay: false,
                        autoplaySpeed: 3000,
                        prevArrow: block.find('.courses-slider__nav__prev'),
                        nextArrow: block.find('.courses-slider__nav__next')
                });
                
                slider.on('init', function(){
                  $(window).trigger('heightChanges');
                });

                
                
        });
}

export { coursesSlider };