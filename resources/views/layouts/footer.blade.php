<!-- footer start -->
<div id="main_footer">
    <div class="inner-footer container">
        <div class="d-flex align-items-start inner-main-footer mb-4 row">
            <div class="col-md-8 footer-col ">
                <div class="d-flex justify-content-start">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/images/new_home_page/main-logo.png') }}"/>
                    </div>
                    <h1 class="footer-header">
                        TRINITY <br> HISTORY
                    </h1>
                </div>
                <div class="title-section">
                </div>
                <div class="nav-area">
                    <a href="{{ route('about') }}" class="footer-link footer-link-underline footer-link-hove">ABOUT US</a>
                    <span class="footer-link"> | </span>
                    <a href="{{ route('about') }}" class="footer-link footer-link-underline footer-link-hove">PRIVACY POLICY</a>
                    <span class="footer-link"> | </span>
                    <a href="{{ route('about') }}" class="footer-link footer-link-underline footer-link-hove">TERMS & CONDITIONS</a>
                </div>
                <div class="nav-area">
                    <p class="footer-link">Copyright © 2000 - 2022 Trinity College, Kandy. All rights reserved.</p>
                </div>
            </div>
            <div class="col-md-4 text-right footer-col col-contact">
                <div>
                    <h3 class="footer-sub-title">CONTACT US</h3>
                    <a href="Tel:+94812234297">
                        <p class="contact-text">T +94 81 223 4297</p>
                    </a>
                    <a href="mailto:history@trinitycollege.lk">
                        <p class="contact-text">Email: history@trinitycollege.lk</p>
                    </a>
                </div>
                <br>
                <br>
                <div>
                    <a href="https://goo.gl/maps/My9ZgSS4zY32" target="_blank">
                        <p class="contact-text">
                            Trinity College, Kandy <br>
                            262, D S Senanayake Veediya, Kandy 20000, <br>
                            Central Province, Sri Lanka</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- footer end -->
<style>
.footer-header {
    color: #f2ece0;
    font-family: 'CaslonBoldBT';
        font-size: 60px;
}
a.footer-link.footer-link-underline.footer-link-hove {
    text-decoration: underline !important;
}
.title-section {
    border-bottom: #f2ece0 solid thick;
    display: none;
    width: 65%;
    padding: 0.2em 0 !important;
    margin: 1em 0 !important;
}
.footer_logo{
	width: 350px;
	height: 130px;
	/* background-color: rgb(221, 221, 221); */
}
.inner-footer {
    border-bottom: #dac79d solid 1px;
    padding: 0 12px !important;
}
    .footer-logo img {
  max-width: 90%;
  height: 150px; 
  display: block; 
     margin-right: 20px;
}
</style>