
// open dropdown click
$(document).on('click', '.dropdown-click', function (e) {
    if (e.target == $(this).find('.dropdown-click-list')[0]) {
        return false;
    }
    $(this).find('.dropdown-click-list').toggleClass('ac');
    $(this).addClass('ac');
});
// close dropdown click
$(window).on('click', function(e) {
    $('.dropdown-click').each(function () {
        if (e.target == $(this).find('.dropdown-click-list')[0]) {
            return false;
        }
        if(e.target != $(this)[0]) {
            $(this).find('.dropdown-click-list').removeClass('ac');
            $(this).removeClass('ac');
        }
    });
});


// accordion
$(document).on('click', '.nav-link-accordion', function() {
    // Get next element
    $(this).toggleClass('ac');
    $(this).find('.nav-link-ac-item').slideToggle(500);
});


// navigation show on small screen
$(document).on('click', '.nav-burger', function() {
    $('.nav-burger path:first-child, .nav-burger path:nth-child(2)').toggleClass('block').toggleClass('hidden');
    // const height = $('.navigation-sm').prop("scrollHeight");
    
    if ($('.nav-burger path:first-child').hasClass('hidden')) {
        $('.navigation-wr').toggleClass('border-b');
        $('.navigation-sm').css('maxHeight', `360px`);
    } else {
        setTimeout(() => {
            $('.navigation-wr').toggleClass('border-b');
        }, 800);
        $('.navigation-sm').css('maxHeight', '');
    }
});