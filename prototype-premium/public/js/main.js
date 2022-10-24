$(document).ready(function() {
    $('#search-input').keyup(function() {
        var input = $(this).val();
        // alert(input);

            $.ajax({
                url: "search",
                method: "GET",
                data: {
                    key: input
                },
                success: function(data) {
                    $('#results').html(data);
                }
            });

    });
});