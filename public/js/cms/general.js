
// sidebar collapse toggler
$(document).on('click', '.sidebar-collapse-btn', function() {
    this._tippy.hide();
    if (!$('.cms-sidebar-wr').hasClass('sidebar-collapse')) {
        localStorage.setItem('sidebar-collapse', true);
        $(this).find('i').removeClass('fa-circle').addClass('fa-dot-circle text-cs-brown-500');
        this._tippy.setContent('maximize?');
        $('.cms-sidebar-wr').removeClass('scroll md:w-64').addClass('md:w-16 sidebar-collapse');
        $('.cms-sidebar').addClass('sidebar-collapse');
        $('.r-content').removeClass('md:ml-64').addClass('md:ml-16');
        $('.sidebar-brand').removeClass('sticky top-0');
    } else {
        localStorage.removeItem('sidebar-collapse');
        $(this).find('i').addClass('fa-circle').removeClass('fa-dot-circle text-cs-brown-500');
        setTimeout(() => {
            this._tippy.setContent('minimize?');
        }, 500);
        $('.cms-sidebar-wr').addClass('scroll md:w-64').removeClass('md:w-16 sidebar-collapse');
        $('.cms-sidebar').removeClass('sidebar-collapse');
        $('.r-content').addClass('md:ml-64').removeClass('md:ml-16');
        $('.sidebar-brand').addClass('sticky top-0');
    }
});

// sidebar burger
$(document).on('click', '.sidebar-burger', function() {
    $('.cms-sidebar-fade').addClass('show')
    $('.cms-sidebar').addClass('show')
    toggleOverflowBody();
});

// toggle overflow body function
function toggleOverflowBody() {
    if ($('body').hasClass('md:overflow-y-auto')) {
        $('body').removeClass('overflow-hidden md:overflow-y-auto');
    } else {
        $('body').addClass('overflow-hidden md:overflow-y-auto');
    }
}

// close sidebar
$(document).on('click', '.cms-sidebar-fade, .sidebar-cl-btn', function() {
    $('.cms-sidebar').removeClass('show')
    $('.cms-sidebar-fade').removeClass('show')
    toggleOverflowBody();
});


// fullscreen
$(document).on('click', '.fullscreen-btn', function() {
    if (!document.fullscreenElement &&    // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
            document.documentElement.msRequestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
});