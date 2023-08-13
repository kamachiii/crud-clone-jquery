$(document).ready(function() {
    $("#add").click(function() {
        var clone = $(".form-container .row").first().clone();
        clone.find("input").val(""); // Clear input values
        $(".form-container").append(clone);
    });
    $(document).on('click', '#remove', function() {
        if($(".form-container .row").length > 1){
            $(this).closest('.row').remove(); // Remove the closest row
        }
    });
});
