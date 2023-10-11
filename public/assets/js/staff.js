$(document).ready(function () {
    fetch_data();
    $(document).on("mouseover", ".principle-btn", function () {
        let id = $(this).data("id");
        $("#" + id).removeClass("hidden-read-more");
        console.log("over" + id);
    });

    $(document).on("mouseout", ".principle-btn", function () {
        let id = $(this).data("id");
        $("#" + id).addClass("hidden-read-more");
        console.log("out" + id);
    });

    $(document).on("click", ".open-model", function () {
        let doc_id = $(this).data("doc");
        let url = `/staff/info/${doc_id}`;
        $("#view-modal-content").load(url, function () {
            $("#viewModal").modal("show");
        });
    });

    $(document).on("click", ".pagination a", function (event) {
        event.preventDefault();
        var page = $(this).attr("href").split("page=")[1];
        fetch_data(page);
    });

    function fetch_data(page = 1) {
        $.ajax({
            url: "/staff/data?page=" + page,
            success: function (data) {
                $(".staff-data-container").html(data);
            },
        });
    }

    $(document).on("click", "#share", function () {
        let url = window.location.href;
        $("#share-url").val(url);
        $("#shareModal").modal("show");
    });

    $(document).on("click", "#collection", function () {
        var id = $('.slide-active').data('id');
        var name = $('.slide-active').data('name');
        $('.main-title').html(name);
        $.ajax({
            url: "/myCollection/add",
            data: {
                album_id: id,
                album_type: 'staff',
            },
            success: function (data) {
                $("#collectionModal").modal("show");
            },
        });
    });

    $(document).on("click", "#information", function () {
        var id = $('.slide-active').data('id');
        $('#photo_id').html(id);
        $("#informationModal").modal("show");
    });
});
