jQuery(function($){

    $("#converter-form").on("change", ":input", function(e){
        var $form = $(this).parents("form");
        var currentRow = $(this).parent("div");
        var otherRow = currentRow.siblings("div");

        if(!currentRow.find("select").val() || !otherRow.find("select").val()) {
            return;
        }

        $.ajax({
            'type': "GET",
            'url': $form.attr("action"),
            'data': {
                'source': currentRow.find("select").val(),
                'destination': otherRow.find("select").val(),
                'amount': currentRow.find("input").val()
            },
            'success': function(response) {
                otherRow.find("input").val(response);
            }
        })

    });
});