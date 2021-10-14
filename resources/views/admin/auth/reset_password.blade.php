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
                            <div class="form-group-login">
                                <div class="input-group inputLogin  mb-4 border rounded-pill p-1">
                                    <input type="password" placeholder="Password Baru" aria-describedby="button-addon4" class="form-control bg-one border-0">
                                    <div class="input-group-prepend border-0">
                                        <button id="button-addon4" type="button" class="btn btn-link btnLogin">
                                            <i class="fas fa-eye-slash icon-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-login">
                                <div class="input-group inputLogin  mb-4 border rounded-pill p-1">
                                    <input type="password" placeholder="Konfirmasi Password" aria-describedby="button-addon4" class="form-control bg-one border-0">
                                    <div class="input-group-prepend border-0">
                                        <button id="button-addon4" type="button" class="btn btn-link btnLogin">
                                            <i class="fas fa-eye-slash icon-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </center>
                            <div class="form-group">
                                <div class="form-check" style="margin-left: 5em;">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ingatkan Password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button class="btn-page-login"><a href="../index.html">Ubah Password</a></button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>