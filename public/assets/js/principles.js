$(document).ready(function () {
    fetch_data();

    $(document).on("mouseover", ".sub-principles .principle-btn", function () {
        let id = $(this).data("id");
        $(".sub-principles #" + id).removeClass("hidden-read-more");
    });

    $(document).on("mouseout", ".sub-principles .principle-btn", function () {
        let id = $(this).data("id");
        $(".sub-principles #" + id).addClass("hidden-read-more");
    });

    $(document).on("mouseover", ".main-principle .principle-btn", function () {
        let id = $(this).data("id");
        $(".main-principle #" + id).removeClass("hidden-read-more");
    });

    $(document).on("mouseout", ".main-principle .principle-btn", function () {
        let id = $(this).data("id");
        $(".main-principle #" + id).addClass("hidden-read-more");
    });

    $(document).on("click", ".open-model", function () {
        let doc_id = $(this).data("doc");
        let url = `/principal/info/${doc_id}`;
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
            url: "/principals/data?page=" + page,
            success: function (data) {
                console.log(data);
                $(".principal-data-container").html(data);
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
                album_type: 'principle',
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

    $(document).on('keyup', '#search-principal', function () {

        $.ajax({
            url: "/principals/data/search",
            data: {
                keyword: $('#search-principal').val(),
            },
            success: function (data) {
                $(".principal-data-container").html(data);
            },
        });

    })
});
