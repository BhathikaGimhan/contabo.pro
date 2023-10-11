$(document).ready(function() {
    let controller = new ScrollMagic.Controller();

    // Blockquote trigger section starts
    let topScene = new ScrollMagic.Scene({
        triggerElement: ".home__firstImage",
        triggerHook: "onLeave"
    })
    .setClassToggle(".home__blockQuote blockquote", "fade__blockQuote")
    .addTo(controller);
    // Blockquote trigger section ends

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__overview",
    })
    .setClassToggle("#second__navbar", "show__secondNavbar")
    .addTo(controller);

    // First image trigger section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: ".home__firstImage",
    })
    .setClassToggle(".home__firstImage", "fade__firstImage")
    .addTo(controller);
    // First image trigger section ends

    // Show movement genits section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: ".genit__movement",
    })
    .setClassToggle(".first__genit", "show__firstGenit")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".second__genit",
    })
    .setClassToggle(".first__genit", "delete__firstGenit")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".second__genit",
    })
    .setClassToggle(".second__genit", "show__secondGenit")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".third__genit",
    })
    .setClassToggle(".second__genit", "delete__secondGenit")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".third__genit",
    })
    .setClassToggle(".third__genit", "show__thirdGenit")
    .addTo(controller)
    // Show movement genits section ends

    // Hidden element trigger section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: ".hidden__elementFirst",
    })
    .setClassToggle(".home__firstImage", "delete__firstImage")
    .on("start", function() {
        $(".home__firstImage").toggle()
    })
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".hidden__elementFirst",
    })
    .setClassToggle(".home__secondImage", "fade__secondImage")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".hidden__elementFirst",
    })
    .setClassToggle(".home__blockQuote", "move__quote")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__overview",
    })
    .setClassToggle("#second__elementOverview", "fade__secondElementOverview")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#delete__blockQuote",
    })
    .setClassToggle(".home__blockQuote", "delete__blockQuote")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__firstTitle",
    })
    .setClassToggle(".first__title", "fade__firstTitle")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__secondTitle",
    })
    .setClassToggle(".second__title", "fade__secondTitle")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTitle",
    })
    .setClassToggle(".third__title", "fade__thirdTitle")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#open__sliderImg",
    })
    .setClassToggle("#home__trinityFirstSliderImg", "move__leftTrinityFirstSlider")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#open__sliderImg",
    })
    .setClassToggle("#home__trinitySecondSliderImg", "move__RightTrinitySecondSlider")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#open__sliderImg",
    })
    .setClassToggle(".home__secondRightContent", "home__secondRightContentTitle")
    .addTo(controller)

    // Mobile overview section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: "#mobile__overviewSection #second__elementOverview",
    })
    .setClassToggle("#mobile__overviewSection #second__elementOverview", "show__second__elementOverview")
    .addTo(controller)
    // Mobile overview section ends

    // Mobile trinity section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: ".mobilehome__secondRightContent",
    })
    .setClassToggle("#mobile__trinitySection", "mobile__trinitySectionShow")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".mobilehome__secondRightContent",
    })
    .setClassToggle(".mobilefirst__title", "mobilefirst__titleShow")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".mobilehome__secondRightContent",
    })
    .setClassToggle(".mobilesecond__title", "mobilesecond__titleShow")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: ".mobilehome__secondRightContent",
    })
    .setClassToggle(".mobilethird__title", "mobilethird__titleShow")
    .addTo(controller)
    // Mobile trinity section ends

    // Mobile timeline section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: "#mobiletime__lineContext",
    })
    .setClassToggle("#mobiletime__lineContext", "mobiletime__lineContextShow")
    .addTo(controller)
    // Mobile timeline section ends

    // Mobile gallery section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: ".mobile__homeGalleryContext",
    })
    .setClassToggle(".mobile__homeGalleryContext", "mobile__homeGalleryContextShow")
    .addTo(controller)
    // Mobile gallery section ends

    topScene = new ScrollMagic.Scene({
        triggerElement: "#open__sliderImg",
    })
    .setClassToggle(".home__secondRightContentDetails", "show__homesecondRightContentDetails")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#active__homeSecondLeftContentImg",
    })
    .setClassToggle("#home__secondLeftContentImg", "show__homesecondLeftContentImg")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSideContent",
    })
    .setClassToggle(".home__secondLeftContent", "shrink__homeSecondLeftContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSideContent",
    })
    .setClassToggle(".home__secondRightContentContext", "shrink__homeSecondRightContentContext")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSideContent",
    })
    .setClassToggle(".home__secondScrollContent", "appear__homeSecondScrollContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSideContent",
    })
    .setClassToggle(".home__secondScrollContent", "show__homeSecondScrollContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSecondSlideContent",
    })
    .setClassToggle(".scroll__first", "move__homeSecondScrollFirstContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSecondSlideContent",
    })
    .setClassToggle(".scroll__second", "show__homeSecondScrollSecondContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSecondSlideContent",
    })
    .setClassToggle(".scroll__third", "show__homeSecondScrollThirdContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSecondSlideContent",
    })
    .setClassToggle(".scroll__fourth", "show__homeSecondScrollFourthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSecondSlideContent",
    })
    .setClassToggle(".scroll__fifth", "show__homeSecondScrollFifthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftSecondSlideContent",
    })
    .setClassToggle(".scroll__sixth", "show__homeSecondScrollSixthContent")
    .addTo(controller)


    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftThirdSlideContent",
    })
    .setClassToggle(".scroll__second", "move__homeSecondScrollSecondContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftThirdSlideContent",
    })
    .setClassToggle(".scroll__third", "move__homeSecondScrollThirdContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftThirdSlideContent",
    })
    .setClassToggle(".scroll__fourth", "move__homeSecondScrollFourthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftThirdSlideContent",
    })
    .setClassToggle(".scroll__fifth", "move__homeSecondScrollFifthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftThirdSlideContent",
    })
    .setClassToggle(".scroll__sixth", "move__homeSecondScrollSixthContent")
    .addTo(controller)


    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFourthSlideContent",
    })
    .setClassToggle(".scroll__third", "delete__homeSecondScrollThirdContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFourthSlideContent",
    })
    .setClassToggle(".scroll__fourth", "moveagain__homeSecondScrollFourthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFourthSlideContent",
    })
    .setClassToggle(".scroll__fifth", "moveagain__homeSecondScrollFifthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFourthSlideContent",
    })
    .setClassToggle(".scroll__sixth", "moveagain__homeSecondScrollSixthContent")
    .addTo(controller)



    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFifthSlideContent",
    })
    .setClassToggle(".scroll__fourth", "delete__homeSecondScrollFourthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFifthSlideContent",
    })
    .setClassToggle(".scroll__fifth", "moveagain2__homeSecondScrollFifthContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__secondScrollLeftFifthSlideContent",
    })
    .setClassToggle(".scroll__sixth", "moveagain2__homeSecondScrollSixthContent")
    .addTo(controller)



    // Home third content trigger
    topScene = new ScrollMagic.Scene({
        triggerElement: "#time__lineContext",
    })
    .setClassToggle("#time__lineContext", "show__timeLineContext")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#time__lineContext",
    })
    .setClassToggle(".home__timeLineRightContext", "show__homeTimeLineRightContext")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#hide__firstContentfirstImage",
    })
    .setClassToggle(".first__timeLine", "hide__timeLineFirstImage")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdImage",
    })
    .setClassToggle(".first__timeLine", "show__timeLineThirdImage")
    .addTo(controller)

    // Show time line second content
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__secondTimeLineContent",
    })
    .setClassToggle(".first__timeLine", "move__firstTimeLine")
    .addTo(controller)

    // Time/year content section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__secondTimeLineContent",
    })
    .setClassToggle(".third__contentTime > div:first-child", "move__thirdContentFirstTime")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__secondTimeLineContent",
    })
    .setClassToggle(".third__contentTime > div:nth-child(2)", "show__thirdContentSecondTime")
    .addTo(controller)
    // Time/year content section ends

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__secondTimeLineContent",
    })
    .setClassToggle(".second__timeLine", "move__secondTimeLine")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#hide__secondContentFirstImage",
    })
    .setClassToggle(".first__timeLine", "hide__firsttimeLineContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#hide__secondContentFirstImage",
    })
    .setClassToggle(".second__timeLine", "hide__secondContentFirstImage")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__secondContentThirdImage",
    })
    .setClassToggle(".second__timeLine", "show__secondContentThirdImage")
    .addTo(controller)

    // Show third content
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTimeLineContent",
    })
    .setClassToggle(".second__timeLine", "move__secondContentTimeLine")
    .addTo(controller)

    // Time/year content section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTimeLineContent",
    })
    .setClassToggle(".third__contentTime > div:nth-child(2)", "move__thirdContentSecondTime")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTimeLineContent",
    })
    .setClassToggle(".third__contentTime > div:nth-child(3)", "show__thirdContentThirdTime")
    .addTo(controller)
    // Time/year content section ends

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTimeLineContent",
    })
    .setClassToggle(".third__timeLine", "show__thirdContentTimeLine")
    .addTo(controller)

    // Show third time line second image
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTimeLineContentSecondImage",
    })
    .setClassToggle(".third__timeLine", "show__thirdContentTimeLineSecondImage")
    .addTo(controller)

    // Show third time line third image
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__thirdTimeLineContentThirdImage",
    })
    .setClassToggle(".third__timeLine", "show__thirdContentTimeLineThirdImage")
    .addTo(controller)

    // Home gallery image section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: "#home__galleryContext",
    })
    .setClassToggle(".home__galleryContent > div:last-child", "show__homeGalleryContext")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__galleryImage",
    })
    .setClassToggle(".home__galleryImageContent > div", "show__homeGalleryImageContent")
    .addTo(controller)

    // Moving gallery images

    // First time
    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageFirstTime",
    })
    .setClassToggle(".home__galleryImageContent > div:first-child img", "move__firstImageContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageFirstTime",
    })
    .setClassToggle(".home__galleryImageContent > div:nth-child(2) img", "move__firstImageContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageFirstTime",
    })
    .setClassToggle(".home__galleryImageContent > div:last-child img", "move__firstImageContent")
    .addTo(controller)

    // Second time
    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageSecondTime",
    })
    .setClassToggle(".home__galleryImageContent > div:first-child img", "move__secondImageContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageSecondTime",
    })
    .setClassToggle(".home__galleryImageContent > div:nth-child(2) img", "move__secondImageContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageSecondTime",
    })
    .setClassToggle(".home__galleryImageContent > div:last-child img", "move__secondImageContent")
    .addTo(controller)

    // Third time
    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageThirdTime",
    })
    .setClassToggle(".home__galleryImageContent > div:first-child img", "move__thirdImageContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageThirdTime",
    })
    .setClassToggle(".home__galleryImageContent > div:nth-child(2) img", "move__thirdImageContent")
    .addTo(controller)

    topScene = new ScrollMagic.Scene({
        triggerElement: "#move__galleryimageThirdTime",
    })
    .setClassToggle(".home__galleryImageContent > div:last-child img", "move__thirdImageContent")
    .addTo(controller)

    // Home gallery image section ends

    // Home collection section starts
    topScene = new ScrollMagic.Scene({
        triggerElement: "#show__homeCollection",
    })
    .setClassToggle(".home__collection", "show__homeCollection")
    .addTo(controller)
    // Home collection section ends
});

// const moveQuote = document.querySelector(".home__blockQuote.move__quote");
// console.log(moveQuote.offsetTop);
