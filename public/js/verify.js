

// disable button
$(document).on('click', '.resend-email', function(e) {
    e.preventDefault();
    $(this).attr('disabled', true);
    $(this).parent().submit();
});

// contact supp
$(document).on('click', '.contact-supp', function(e) {
    e.preventDefault();

    let messageToLink = encodeURIComponent();

    checkWIndows(messageToLink);
});
function checkWIndows() {
    if ($( window ).width() <= 1023) {
        let sendMail = `mailto:sp.dirghayusa@gmail.com?subject=Email Verification Issue`;
        window.location.href = sendMail;
    } else {
        const sendMail = `https://mail.google.com/mail/?view=cm&fs=1&to=sp.dirghayusa@gmail.com&su=Email+Verification+Issue`;
        const w = 700, h = 520;
        const left = (screen.width/2)-(w/2);
        const top = (screen.height/2)-(h/2)-10;
        window.open(sendMail, '_blank', `toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${w}, height=${h}, top=${top}, left=${left}`).focus();
    }
}