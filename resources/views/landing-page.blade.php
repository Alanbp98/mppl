<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="assets/css/landing-page.css">
</head>
<!--end::Head-->
<!--begin::Body-->
<body>
    <!--begin::Navbar-->
    <div class="navbar">
        <!--begin::hamburgerBar-->
        <div class="col">
            <button class="hamburger">
                <div class="bar"> Toolbar</div>
            </button>
        </div>
        <!--end::hamburgerBar-->
        <div class="col">
            <!--begin::sign-upButton-->
            <div> 
                <button class="sign-up"><a href="sign-up.html">Sign Up</a></button>
            </div>
            <!--end::sign-upButton-->
            <!--begin::sign-inButton-->
            <div>
                <button class="sign-in"><a href="sign-in.html">Sign In</a></button>
            </div>
            <!--end::sign-inButton-->
            <div>
                <label class="form-label fs-8 text-dark"></label>
                <div class="input-group">
                    <select class="form-select text-dark fs-8" data-control="select2" data-placeholder="Pilih Select2" data-allow-clear="true">
                        <option></option>
                        <option value="us">English(US)</option>
                        <option value="uk">English(UK)</option>
                        <option value="idn">Indonesian</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::Banner-->
    <div class="container">
        <!--begin::newsTitle-->
        <h1>NEWS</h1>
        <!--end::newsTitle-->
        <!--begin::bannerImg-->
        <div class="bannerImg">
            <h1>Banner Content</h1>
            <div class="ket-content">
                <p>Alan Spacer <br>
                04/09/2000 <br>
                "Title" <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, obcaecati non dolorum enim maxime aperiam suscipit architecto inventore quo est ad sit error veniam eveniet tenetur voluptatum id optio distinctio?
                </p>
            </div>
        </div>
        <!--end::bannerImg-->
    </div>
    <!--end::Banner-->
    <!--begin::Program-->
    <div class="program">
        <!--begin::programTitle-->
        <h1>PROGRAM</h1>
        <!--end::programTitle-->
        <!---begin::isiProgram-->
        <div class="bingkai">
            <!--begin::program1-->
            <div class="program1">
                <h1>Galang Dana</h1>
            </div>
            <!--end::program1-->
            <!--begin::program2-->
            <div class="program2">
                <h1>Zakat</h1>
            </div>
            <!--end::program2-->
            <!--begin::program3-->
            <div class="program3">
                <h1>Pendidikan</h1>
            </div>
            <!--end::program3-->
        </div>
        <!--end::isiProgram-->
    </div>
    <!--end::Program-->
    <!--begin::footer-->
    <div class="footer">
        <!--begin::rowAtas-->
        <div class="footerAtas">
            <div class="rfAtas">
                <!--begin::Company-->
                <div class="linkcompany">
                    <h1>Company</h1>
                    <a href="">About Us</a>
                    <a href="">Patnership</a>
                </div>
                <!--end::Company-->
                <!--begin::Programs-->
                <div class="linkprogram">
                    <h1>Programs</h1>
                    <a href="">Donasi Nominal</a>
                    <a href="">Donasi Doa</a>
                    <a href="">Donasi Relawan</a>
                </div>
                <!--end::Company-->
                <!--begin::Other-->
                <div class="linkother">
                    <h1>Other Information</h1>
                    <a href="">Term and Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="FAQ"></a>
                </div>
                <!--end::Other-->
            </div>
            <div class="rfBawah">
                <a href=""><img src="assets/img/logo_mail.png" alt="IKON Contack Us!"><h1>Contact Us!</h1></a>
            </div>
        </div>
        <!--end::rowAtas-->
        <div class="footerBawah">
            <div class="rfAtas2">
                <p>C 2023-Kita Bantu Yuk.</p>
            </div>
            <div class="rfBawah2">
                <div class="linkin">
                    <a href=""><img src="assets/img/logo_linkedin.png" alt="link in"></a>
                </div>
                <div class="ig">
                    <a href=""><img src="assets/img/logo_ig.png" alt="Ig"></a>
                </div>
                <div class="fc">
                    <a href=""><img src="assets/img/logo_facebook.png" alt="FC"></a>
                </div>
                <div class="yt">
                    <a href=""><img src="assets/img/logo_youtube.png" alt="Yt"></a>
                </div>
            </div>
        </div>
    </div>
    <!--end::footer-->
</body>
<!--end::Body-->
</html>