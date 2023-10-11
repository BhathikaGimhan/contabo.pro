<!--link rel="stylesheet" href="{{ asset('assets/css/share-modal.css') }}"-->
<style>
    .fa-times{
        font-size : 30px;
        cursor : pointer;
    }
    .modal-content{
        background-color : #F2ECE0;
    }
    h5{
        color : #103355;
        font-size : 30px;
        font-weight : 700;
    }
    .share-icon{
        margin-left : 20px;
    }
    .share-icon:nth-child(1){
        margin-left : 0;
    }
    #share-url{
        width : 325px;
        outline : none;
        border : none;
        background-color : #fff;
        font-size : 20px;
        padding : 5px 15px;
    }
    .cpy-btn{
        background : #103355;
        border : none;
        color : #fff;
        text-transform : uppercase;
        font-size : 17px;
        padding : 6px 12px;
    }
</style>

<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="share-modal-content">
            <div class="modal-body">
                <!--div class="close" data-bs-dismiss="modal">
                    <i class="fa fa-close fa-stack-1x" id="icon-close"></i>
                </div-->
                <div class="row text-right d-block" >
                    <i class="fa fa-times" data-bs-dismiss="modal" aria-hidden="true"></i>
                </div>
                <div class="text-center mt-4">
                    <h5>SHARE THIS ITEM</h5>
                </div>
                <div class="d-flex justify-content-center pt-4">
                    <div class="share-icon" id="shareWithFb"><img
                            src="https://cdn-icons-png.flaticon.com/512/145/145802.png" width="42" alt="">
                    </div>
                    <div class="share-icon" id="shareWithTwitter"><img
                            src="https://cdn-icons-png.flaticon.com/512/145/145812.png" width="42" alt="">
                    </div>
                    <div class="share-icon" id="shareWithMail"><img
                            src="https://cdn-icons-png.flaticon.com/512/3178/3178158.png" width="42" alt="">
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <div class="d-flex justify-content-center pt-4 pb-4 copy-input">
                        <input id="share-url" class="custom-search-input" type="readonly" readonly value>
                    </div>
                </div>
                <div class="d-flex justify-content-center pb-4">
                    <button class="cpy-btn" id="copy-link">copy  link</button>
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