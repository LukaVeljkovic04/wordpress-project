jQuery(document).ready(function ($) {

    $(".trip-download-div").has("#wptravel-trip-downloads-block").css("display", "block");

    $(".trip-sale-div").has("#wptravel-block-trip-sale").css("display", "block");

    $(".trip-facts-div").has("#wptravel-block-trip-fact").css("display", "block");

    $("<div id='close-enquiry'><i class='fa fa-times' aria-hidden='true'></i></div>").insertBefore('.wp-travel-enquiries-form-wrapper');

    $('#close-enquiry').click(function () {
        $('#wptravel-block-trip-enquiry').css('display', 'none');
    });

    $('#trip-enquiry').click(function () {
        $('#wptravel-block-trip-enquiry').css('display', 'block');
    });

    $('#trip-booking').click(function () {
        $(".resp-tab-content").css("display", "none");
        $("#booking").closest(".resp-tab-content").css("display", "block");
    });


    setTimeout(() => {
        $("#theme-loader").css("display", "none");
    }, 1000);
    /*------------------------------------------------
                    END JQUERY
    ------------------------------------------------*/

    // const bookingLink = $('a[href="#booking"]');
    // const bookingTabActive = $('li.wp-travel-booking-form');
    // const tabColorReset = $('li.overview');

    // bookingLink.on('click', function (e) {
    //     e.preventDefault();
    //     setTimeout(function () {
    //         const targetElement = $('#booking');
    //         if (targetElement.length) {
    //             targetElement[0].scrollIntoView({
    //                 behavior: 'smooth'
    //             });
    //             bookingTabActive.css('background-color', '#fff !important');
    //             tabColorReset.css('background-color', '#f9f9f9 !important');
    //         }
    //     }, 0);
    // });


});


