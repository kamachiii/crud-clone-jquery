$(document).ready(function() {
    $("#add").click(function() {
        var clone = $(".form-container .row").first().clone();
        clone.find("input").val(""); // Clear input values
        $(".form-container").append(clone);
    });
});
