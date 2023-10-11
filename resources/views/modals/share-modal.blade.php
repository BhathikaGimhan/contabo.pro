<link rel="stylesheet" href="{{ asset('assets/css/share-modal.css') }}">
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="share-modal-content">
            <div class="modal-body p-4">
                <div class="close" data-bs-dismiss="modal"><span class="fa-stack fa-2x">
                        <i class="far fa-circle fa-stack-1x"></i>
                        <i class="fa fa-close fa-stack-1x"></i>
                    </span></div>
                <div class="text-center">
                    <h5>SHARE THIS ALBUM TO</h5>
                </div>
                <div class="d-flex justify-content-center pt-4">
                    <div class="share-icon" id="shareWithFb"><img
                            src="https://cdn-icons-png.flaticon.com/512/145/145802.png" width="48" alt="">
                    </div>
                    <div class="share-icon" id="shareWithTwitter"><img
                            src="https://cdn-icons-png.flaticon.com/512/145/145812.png" width="48" alt="">
                    </div>
                    <div class="share-icon" id="shareWithMail"><img
                            src="https://cdn-icons-png.flaticon.com/512/3178/3178158.png" width="48" alt="">
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <div class="d-flex justify-content-center pt-4 pb-4 copy-input">
                        <input id="share-url" class="custom-search-input" type="readonly" readonly value
                            placeholder="Search">
                        <i class="icon fa fa-link" id="copy-link"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {


        $("#copy-link").click(function() {
            $("#share-url").select();
            document.execCommand("copy");
        });

        $("#shareWithFb").click(function() {
            var coppiedLink = $("#share-url").val();
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(
                    coppiedLink),
                'facebook-share-dialog');
        });

        $("#shareWithTwitter").click(function() {
            var coppiedLink = $("#share-url").val();
            window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(coppiedLink));
        });

        $("#shareWithMail").click(function() {
            var coppiedLink = $("#share-url").val();
            let body = coppiedLink;
            let mailToLink = "mailto:?body=" + encodeURIComponent(body);
            window.location.href = mailToLink;
        });

    });
</script>
