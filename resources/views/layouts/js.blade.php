
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<!-- Iconify cdn -->
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- Swipper slider cdn -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- ScrollMagic cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
        integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

<script src="{{ asset('assets/viewerjs/viewer.js') }}" defer></script>
<script src="{{ asset('assets/vslider/jquery.carousel-vertical.min.js') }}"></script>

<script>
    $(document).on('mouseover', '#sub-item-1', function () {
        console.log('focased')
        $('#main-li-item-1').addClass('selected-nav ');
    })

    $(document).on('mouseleave', '#sub-item-1', function () {
        $('#main-li-item-1').removeClass('selected-nav ');
    })

    $(document).on('mouseover', '#sub-item-2', function () {
        console.log('focased')
        $('#main-li-item-2').addClass('selected-nav ');
    })

    $(document).on('mouseleave', '#sub-item-2', function () {
        $('#main-li-item-2').removeClass('selected-nav ');
    })

</script>

@yield('assets-js')

{{-- <script src="{{asset('assets/js/slick_slider.js')}}" defer></script>
<script src="{{asset('assets/js/gallery.js')}}" defer></script>
<script src="{{asset('assets/js/home.js')}}" defer></script>
<script src="{{asset('assets/js/navbar.js')}}" defer></script>
<script src="{{asset('assets/js/principles.js')}}" defer></script>
<script src="{{asset('assets/js/roll_calls.js')}}" defer></script>
<script src="{{asset('assets/js/story-board.js')}}" defer></script>
<script src="{{asset('assets/js/support-us.js')}}"></script>
<script src="{{asset('assets/js/the-trinity-story.js')}}" defer></script>
<script src="{{asset('assets/js/timeline.js')}}" defer></script> --}}
{{-- <script src="{{asset('assets/js/timeline_navbar.js')}}" defer></script> --}}
