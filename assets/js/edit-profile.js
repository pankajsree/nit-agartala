var updated_col = [];
var col = "";

$(document).ready(function() {

    $("#nav-profile, #nav-edit-profile").addClass("active");

    $(".tbl-col").change(function() {
        $(this).off("change");
        col = $(this).attr("name");
        updated_col.push(col);
        $("#updated-col").val(updated_col);
    });

    $("#photo").change(function() {
        $("#photo_flag").val(1);
    });

    var tags = document.querySelectorAll("input, textarea");

    for(var i = 0; i < tags.length; i++) {
        tags[i].addEventListener("input", function() {
            document.getElementById("edit-submit").disabled = false;
        });
    }
});
