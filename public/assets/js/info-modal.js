$(document).ready(function () {

    $(document).on("click", "#submitMessage", function () {
        $.ajax({
            type: "POST",
            data: {
                photo_id: $('#photo_id').html(),
                name: $('#name').val(),
                email: $('#email').val(),
                comment: $('#comment').val(),
            },
            url: "/send-information",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (data) {
                $('#name').val('');
                $('#email').val('');
                $('#comment').val('');
            },
            error: function (response) {
                console.log(response);
            },
        });
    });
});
