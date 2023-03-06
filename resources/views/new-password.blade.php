<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new-password</title>
    <link rel="stylesheet" href="assets/css/sign-in.css">
    <script src="assets/js/sign-in.js"></script>
</head>
<body>
    <div class="container">
        <div class="satu">
            <div class="satu1">
                <img src="assets/img/Logo KBY.png" alt="">
            </div>
            <div class="satu2">
                <h4 class="ayat">
                    " Karena sesungguhnya <br>
                    sesudah kesulitan itu ada <br>
                    kemudahan, sesungguhnya <br>
                    sesudah kesulitan itu ada <br>
                    kemudahan." <br>
                    (Q.S Al-Insyirah: 5-6)
                </h4>
            </div>
            <div class="satu3">
                <img src="assets/img/sign-up.jpeg" alt="">
            </div>
        </div>
        <div class="dua">
            <div class="dua1">
                <div class="dua11">
                    <!-- begin::language -->
                    <div class="language">
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
                    <!-- end::language -->
                    <br>
                    <!--begin::Form-->
                    <form id="form">
                        <!--begin::Heading-->
                        <div>
                            <!--begin::Title-->
                            <h1>Setup New Password</h1>
                            <p>Have you already reset the password ? <a href="sign-in.html"> Sign in</a></p>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <br>
                        <!--begin::Input group=-->
                        <div>
                            <!--begin::Password-->
                            <div class="input-control">
                                <input class="form-control bg-transparent" type="password" placeholder="Password" id="password" name="password" autocomplete="off" required>
                                <span><hr></span>
                                <div class="error"></div>
                            </div>
                            <!--end::Password-->
                            <br>
                            <!--begin::Repeat Password-->
                            <div class="input-control">
                                <input placeholder="Repeat Password" id="password2" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" required>
                                <span><hr></span>
                                <div class="error"></div>
                            </div>
                            <!--end::Repeat Password-->
                        </div>
                        <!--end::Input group=-->
                        <br>
                        <!-- begin::persetujuan -->
                        <div class="persetujuan">
                            <label class="form-check form-check-inline">
                            <input type="checkbox">
                            <span>
                                I Agree & 
                                <a href="">Term and Conditions</a>
                            </span>
                        </div>
                        <!-- end::persetujuan -->
                        <br>
                        <!--begin::Submit button-->
                        <div>
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary"><span><a href="two-steps.html">Submit</a></span></button>
                        </div>
                        <!--end::Submit button-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</body>
</html> 