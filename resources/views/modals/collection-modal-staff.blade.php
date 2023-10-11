<!--link rel="stylesheet" href="{{ asset('assets/css/collection-modal.css') }}"-->
<style>
    .fa-times{
        font-size : 30px;
        cursor : pointer;
    }
    h6{
        color : #103355;
        font-size : 30px;
        font-weight : 700;
        text-transform : uppercase;
    }
    .main-title{
        color : #8D7237;
        font-size : 30px;
        font-weight : 700;
    }
    button{
        background : #103355;
        border : none;
        color : #fff;
        text-transform : uppercase;
        font-size : 17px;
        padding : 6px 18px;
    }
</style>
<div class="modal fade" id="collectionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row text-right d-block" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="text-center">
                    <h6 class="pb-1">THE STAFF MEMBER</h6>
                    <h3 class="main-title text-center">Mr. L. S. Danthanarayana</h3>
                    <h6 class="pb-3 pt-1">WAS ADDED TO YOUR COLLECTIONS</h6>
                    <a href="#" style="color: black" class="underline-text d-flex pb-3 justify-content-center">
                        <button>VIEW MY COLLECTIONS</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>