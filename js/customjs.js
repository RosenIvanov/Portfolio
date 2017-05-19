/* DROPDOWN ARROW EFFECT 
$(function () {
    $(".dropdown").hover(function () {
        $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");
    }, function () {
        $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");
    });
}); */
/* SLIDESHOW */
(function ($) {
    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    //Initialize carousel 
    $myCarousel.carousel();
    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);
    //Pause carousel  
    $myCarousel.carousel('pause');
    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
    $('#carousel-example-generic').carousel({
        interval: 3000,
        pause: "false"
    });
    // Social Media icons animation
    $("li.social").hover(function () {
        $(this).toggleClass("rotateIn");
    });
    // Tooltip Function
    $('[data-toggle="tooltip"]').tooltip();
    // Custom Tooltip function for links
    $('a[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });
    // SCROLL TO TOP BUTTON
    var offset = 250;
    $(".back-to-top").css({
        "display": "none"
    });
    var duration = 500;
    $(window).scroll(function () {
        if ($(this).scrollTop() > offset) {
            $(".back-to-top").fadeIn(duration);
        } else {
            $(".back-to-top").fadeOut(duration);
        }
    });
    $(".back-to-top").click(function (event) {
        event.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, duration);
        return false;
    })
    // CONTACT FORM AJAX, JQUERY
    $('#contact-form').validator();
    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
    // PORTFOLIO PAGE 
    $('.thumbnail').click(function () {
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#myModal').modal({
            show: true
        });
    });
    // portfolio gallery
    $(document).ready(function () {

        $(".filter-button").click(function () {
            var value = $(this).attr('data-filter');

            if (value == "all") {

                $('.filter').show('1000');
            } else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });

    // PROJECT STEPS
    $('.btn-circle').on('click', function () {
        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
        $(this).addClass('btn-info').removeClass('btn-default').blur();
    });

    $('.next-step, .prev-step').on('click', function (e) {
        var $activeTab = $('.tab-pane.active');

        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

        if ($(e.target).hasClass('next-step')) {
            var nextTab = $activeTab.next('.tab-pane').attr('id');
            $('[href="#' + nextTab + '"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#' + nextTab + '"]').tab('show');
        } else {
            var prevTab = $activeTab.prev('.tab-pane').attr('id');
            $('[href="#' + prevTab + '"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#' + prevTab + '"]').tab('show');
        }
    });
    // Lazy Load Effect
    $("img").lazyload({
        threshold: 200,
        effect: "fadeIn"
    });
    // photography not loading on filtering
    $("img.photography-img").lazyload({
        threshold: 500,
        effect: "fadeIn"
    });
})(jQuery);