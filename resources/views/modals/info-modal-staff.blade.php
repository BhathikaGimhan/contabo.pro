<!--link rel="stylesheet" href="{{ asset('assets/css/info-modal.css') }}"-->
<style>
    .fa-times{
        font-size : 30px;
        cursor : pointer;
    }
    .main-txt{
        color : #103355;
        font-size : 30px;
        font-weight : 700;
    }
    .table-data{
        padding-left : 30px;
        padding-right : 30px;
    }
    input,textarea {
        border : none;
        background-color : #fff;
        outline : none;
        padding : 3px 13px;
    }
    .input-label{
        font-size : 20px;
        text-transform : uppercase;
    }
    #photo_id{
        font-family : 'Gauthier Next FY' !important;
        font-size : 20px;
    }
    .simple-text{
        font-size : 15px;
        text-transform : uppercase;
    }
    button{
        background : #103355;
        border : none;
        color : #fff;
        text-transform : uppercase;
        font-size : 17px;
        padding : 7px 18px;
    }
</style>

<div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row text-right d-block" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <h5 class="text-center main-txt mt-2">I HAVE MORE INFORMATION<br> RELATED TO THIS STAFF MEMBER</h5>
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="input-label">ID :</p>
                        </div>
                        <div class="col-md-8">
                            <p id="photo_id">2329386293v1</p>
                        </div>
                        <div class="col-md-4 pt-2">
                            <p class="input-label">Your Name :</p>
                        </div>
                        <div class="col-md-8 pt-2">
                            <input type="text" id="name" name="name" class="info-input w-100" required>
                        </div>
                        <div class="col-md-4 pt-2">
                            <p class="input-label">Email Address :</p>
                        </div>
                        <div class="col-md-8 pt-2">
                            <input type="text"  id="email" name="email" class="info-input w-100" required>
                        </div>
                        <div class="col-md-4 pt-2">
                            <p class="input-label">Comment :</p>
                        </div>
                        <div class="col-md-8 pt-2">
                            <textarea name="comment" class="w-100" id="comment" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <div><p class="simple-text">THE COLLEGE ARCHIVIST WILL REVIEW YOUR COMMENT AND RESPOND VIA EMAIL</p></div>
                        <div>
                            <a href="#" style="color: black">
                                <button>submit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--a href="#" style="color: black" class="underline-text d-flex justify-content-center pt-2">
                    <h6 id="submitMessage">SUBMIT THIS MESSAGE</h6>
                </a>
                <p>THE COLLEGE ARCHIVIST WILL REVIEW YOUR COMMENT AND RESPOND VIA EMAIL</p-->
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/info-modal.js') }}"></script>