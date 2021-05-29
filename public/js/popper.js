

// open dropdown
$(document).on('click', '.dropdown-btn', function(e) {
    const userDropdownBtn = e.target;
    const userDropdownPopover = $(e.target).parent().find('.dropdown-menu')[0];
    let parentDropdown = $(e.target).parent();
    
    if (!parentDropdown.hasClass('ac')) {
        let placement = 'bottom-start';
        let offsetY = 2;
        let offsetX = 0;

        if ($(this).parent().data('placement')) {
            placement = $(this).parent().data('placement');
        }
        if ($(this).parent().data('offset-y')) {
            offsetY = $(this).parent().data('offset-y');
        }
        if ($(this).parent().data('offset-x')) {
            offsetX = $(this).parent().data('offset-x');
        }
        
        $('.dropdown').removeClass('ac');
        parentDropdown.addClass('ac');
        createPopper(userDropdownBtn, userDropdownPopover, {
            placement: placement,
            modifiers: [
                {
                    name: 'offset',
                    options: {
                        offset: [offsetX, offsetY],
                    },
                },
            ],
        });
    } else {
        parentDropdown.removeClass('ac');
    }
});
// window on click close dropdown
$(window).on('click', function(e) {
    if (!$(e.target).hasClass('dropdown-btn') && $('.dropdown').find($(e.target)).length == 0 ) {
        $('.dropdown').removeClass('ac');
    }
});

// close dropdown menu
// $(window).on('click', function(e) {
//     $('.dropdown').each(function () {
//         if (e.target == $(this).find('.dropdown-menu')[0] || e.target == $(this).find('.dropdown-btn')[0]) {
//             let isActive = $(this).hasClass('ac');
//             $('.dropdown').removeClass('ac');
//             if(!isActive) {
//                 $(this).removeClass('ac')
//             } else {
//                 $(this).addClass('ac')
//             }
//             return false;
//         }
//         if(e.target != $(this)[0]) {
//             $(this).removeClass('ac');
//         }
//     });
// });