$(window).on('load', function () {
    $("#spinner").fadeOut('slow');
});

$(document).ready(function () {

//    Create a confirmation dialog for links using bootbox.js
    $(document).on("click", "#confirm", function (e) {
        var link = $(this).attr("href"); // "get" the intended link in a var
        e.preventDefault();
        bootbox.confirm("Are you sure?", function (result) {
            if (result) {
                document.location.href = link;  // if result, "set" the document location
            }
        });
    });
});