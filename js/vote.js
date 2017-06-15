$(document).ready(function () {
    $('.vote-up-down a').click(function (e) {
        var actionLink = $(this).attr('href');
        $.get(actionLink, function () {
            console.log("success");
        })
        .done(function () {
            console.log("second success");
        })
        .fail(function () {
            alert("Unexpected error occurred. Please try again later");
        })
        .always(function () {
            console.log("finished");
        });
        e.preventDefault();
    });
});