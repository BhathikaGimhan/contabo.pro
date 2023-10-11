<link rel="stylesheet" href="{{ asset('assets/css/info-modal.css') }}">
<div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="close" data-bs-dismiss="modal"><span class="fa-stack fa-2x">
                        <i class="far fa-circle fa-stack-1x"></i>
                        <i class="fa fa-close fa-stack-1x"></i>
                    </span></div>
                <div>
                    <h5 class="pb-2">I HAVE MORE INFORMATION RELATED TO <br>THIS PHOTOGRAPH</h5>
                    <table class="w-100">
                    <tr>
                        <td class="input-label">PHOTO ID:</td>
                        <td id="photo_id"></td>
                    </tr>
                    <tr>
                        <td class="input-label">YOUR NAME:</td>
                        <td><input type="text" id="name" name="name" class="info-input" required></td>
                    </tr>
                    <tr>
                        <td class="input-label">EMAIL ADDRESS:</td>
                        <td><input type="email" id="email" name="email" class="info-input" required></td>
                    </tr>
                    <tr>
                        <td class="input-label">COMMENT:</td>
                        <td><textarea name="comment" id="comment" rows="6" required></textarea></td>
                    </tr>
                </table>
                    <a href="#" style="color: black" class="underline-text d-flex justify-content-center pt-2">
                        <h6 id="submitMessage">SUBMIT THIS MESSAGE</h6>
                    </a>
                    <p>THE COLLEGE ARCHIVIST WILL REVIEW YOUR COMMENT AND RESPOND VIA EMAIL</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/info-modal.js') }}"></script>
