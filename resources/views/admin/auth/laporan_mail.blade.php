@extends('admin.auth.header.app')
<body style="background-color: #5AB6DE;">
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box">
                    <div class="header-content">
                        <center>
                            <div class="header">
                                <div class="logo text-center"><img src="assets/images/logo.png"  alt="Tajuk Logo"></div>
                            </div>
                        </center>
                        <form class="form-auth-small" action="index.php">
                        <center>
                            <div class="form-group-konfmail ">
                                <i class="fas fa-envelope-open iconMail"></i>
                            </div>
                            <div class="form-group-login">
                                <div class="title-konf">
                                    <h5>Success !</h5>
                                    <p>Kami sudah mengirimkan email<br>
                                        ke Alamat <b>lorem@gmail.com</b>, Harap Periksa<br>
                                        Email Anda </p>
                                </div>
                            </div>
                        </center>
                            <div class="col-md-12">
                                <center>
                                    <button class="btn-page-login"><a href="#">Verifikasi Email</a></button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>