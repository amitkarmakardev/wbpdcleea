$(window).on('load', function () {
    $("#spinner").fadeOut('slow');
});

// adding poll option

function addPollOption(){
    $('#extra-poll-options').append(
      '<div class="form-group"><label for="option">Option</label><input class="form-control" name="option[]" type="text"></div>'
    );
}

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

    $(".nav a").on("click", function(){
        // $(".nav").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });
});