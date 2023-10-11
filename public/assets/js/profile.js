$(document).ready(function () {
    var swiper = new Swiper(".swiper3", {
        slidesPerView: 3,
        spaceBetween: 0,
        loop: false,
        centerSlide: true,
        centerInsufficientSlides: true,
        centeredSlidesBounds: true,
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".swiper4", {
        slidesPerView: 4,
        spaceBetween: 0,
        loop: false,
        centerSlide: true,
        centerInsufficientSlides: true,
        centeredSlidesBounds: true,
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 4,
            },
        },
    });

    var swiper = new Swiper(".swiper1", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        centerSlide: true,
        centerInsufficientSlides: true,
        centeredSlidesBounds: true,
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var changeEmail = false;
    var changePass = false;

    $(document).on("click", "#btn-change-email", function (event) {
        event.preventDefault();
        changeEmail = true;
        $("#email").removeAttr("readOnly").val("").focus();
    });

    $(document).on("click", "#btn-change-pass", function (event) {
        event.preventDefault();
        changePass = true;
        $("#password").removeAttr("disabled").val("").focus();
    });

    $(document).on("click", ".change-btn", function () {
        $("#avatar").click();
    });

    $(document).on("click", ".remove-btn", function () {
        location.replace('profile/remove-avatar');
    });

    $(document).on("click", ".remove", function () {
        var id = $(this).data('id');
        $.ajax({
            method: "DELETE",
            url: `myCollection/remove/${id}`,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (data) {
                window.location.reload();
            },
        });
    });

});
