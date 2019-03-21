String.prototype.premalink = function () {
    return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};


$('.add-to-cart-btn').on('click', function () {

    usrSize = $("#usersize").val();
    usrColor = $("#usercolor").val();


    $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: {

            pid: $(this).data('id'),
            usersize: usrSize,
            usercolor: usrColor


        },
        success: function (res) {
            window.location.reload();
        }
    });

});





$('.origin-text').on('focusout', function () {
    $('.target-text').val($(this).val().premalink());
});


function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    // document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    // document.getElementById("main").style.marginLeft = "0";
}



$("#agree").bind("click", function () {
    this.disabled = true;
});



$('.thumbnail').on('click', function () {
    var clicked = $(this);
    var newSelection = clicked.data('big');
    var $img = $('.primary').css("background-image", "url(" + newSelection + ")");
    clicked.parent().find('.thumbnail').removeClass('selected');
    clicked.addClass('selected');
    $('.primary').empty().append($img.hide().fadeIn('slow'));
});


$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});



    // usrSize = $("#usersize").val();
    // usrvariation = $('.add-to-cart-btn').data();
    // $("#usersize").change(function (eventData) {
    //     console.log(eventData.target.id, eventData.target.value);
    //     $(".add-to-cart-btn").data(eventData.target.value, eventData.target.id);
    // });



// // shahar code starts here _ dont trust
// $("#usersize").change(function (eventData) {
//     console.log(eventData.target.id, eventData.target.value);
//     $(".add-to-cart-btn").data(eventData.target.value, eventData.target.id);
// });