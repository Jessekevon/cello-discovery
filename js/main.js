// Main Scripts

(function($) {

    
    // $('.play').click(function () {
    //     video = '<iframe src="' + $('img').attr('data-video') + '"></iframe>';
    //     $('.video').replaceWith(video);
    // });

    // Video

    var timeoutId;
    var $videoBgAspect = $(".videobg-aspect");
    var $videoBgWidth = $(".videobg-width");
    var videoAspect = $videoBgAspect.outerHeight() / $videoBgAspect.outerWidth();

    function videobgEnlarge() {
        console.log('resize');
        windowAspect = ($(window).height() / $(window).width());
        if (windowAspect > videoAspect) {
            $videoBgWidth.width((windowAspect / videoAspect) * 100 + '%');
        } else {
            $videoBgWidth.width(100 + "%")
        }
    }

    $(window).resize(function () {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(videobgEnlarge, 100);
    });

    $(function () {
        videobgEnlarge();
    });

    
    /*
* alm_adv_filter()
* https://connekthq.com/plugins/ajax-load-more/examples/filtering/advanced-filtering/
*
*/

    var alm_is_animating = false;

    function alm_adv_filter() {


        if (alm_is_animating) {
            return false; // Exit if filtering is still active 
        }

        alm_is_animating = true;

        var obj = {},
            count = 0;

        // Loop each filter menu
        $('.advanced-filter-menu').each(function (e) {
            var menu = $(this),
                type = menu.data('type'), // type of filter elements (checkbox/radio/select)
                parameter = menu.data('parameter'), // category/tag/year
                value = '',
                count = 0;

            // console.log('Menu:', menu);
            // console.log('Type:', type);
            // console.log('Parameter:', parameter);

            // Loop each item in the menu      	
            if (type === 'checkbox' || type === 'radio') { // Checkbox or Radio
                $('input:checked', menu).each(function () {
                    count++;
                    var el = $(this);

                    // Build comma separated string of items
                    if (count > 1) {
                        value += ',' + el.val();
                    } else {
                        value += el.val();
                    }
                });
            }

            if (type === 'select') { // Select
                var select = $(this);
                value += select.val();
            }

            obj[parameter] = value; // add value(s) to obj

        });

        var data = obj;
        console.log('Data:', data);
        $.fn.almFilter('fade', '300', data); // Send data to Ajax Load More
    }

    // Update Filters everytime there is an update to the inputs    
    $('input').on('change', alm_adv_filter);

    // Update filters when button is cliked    
    //  $('#apply-filters').on('click', alm_adv_filter);

    /*
    * almFilterComplete()
    * Callback function sent from core Ajax Load More
    *
    */
    $.fn.almFilterComplete = function () {
        alm_is_animating = false; // clear animating flag
    };

    // Navigation

    (function ($) { // Begin jQuery
        $(function () { // DOM ready
            // If a link has a dropdown, add sub menu toggle.
            // $('nav ul li a:not(:only-child)').click(function (e) {
            //     $(this).siblings('.sub-menu').toggle();
            //     // Close one dropdown when selecting another
            //     $('.sub-menu').not($(this).siblings()).hide();
            //     e.stopPropagation();
            // });
            // Clicking away from dropdown will remove the dsub0ropdown class
            $('html').click(function () {
                $('.sub-menu').hide();
            });
            // Toggle open and close nav styles on click
            $('#nav-toggle').click(function () {
                $('nav ul').slideToggle();
                $('.menu-header-primary').toggleClass('active');
            });
            // Hamburger to X toggle
            $('#nav-toggle').on('click', function () {
                this.classList.toggle('active');
            });
        }); // end DOM ready
    })(jQuery); // end jQuery

    // Slider 
    // $('.testimonial-slider').slick({
    //     infinite: true,
    //     slidesToShow: 2,
    //     slidesToScroll: 2
    // });

    $('.login-btn').on('click', function(){
        $('.form-modal').addClass('active');
    });

    $('.member-btn').on('click', function () {
        $('.member-form-modal').addClass('active');
    });

    $('.close-modal').on('click', function(){
        $('.modal').removeClass('active');
    });

    $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true
    });
    
    $('.drawer-arrow').on('click', function() {
        $('.additional-resources').toggleClass('active');
        $(this).toggleClass('active');
    })

    // Accordion

    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function (j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });


})(jQuery);
