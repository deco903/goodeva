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
                        <form class="form-auth-small" action="{{route('post.register')}}" method="POST">
                        <center>
                            @csrf
                            <div class="form-group-login">
                                <div class="input-group inputLogin mb-4 border rounded-pill p-1">
                                    <input type="text" name="name" placeholder="Masukan Nama" aria-describedby="button-addon4" class="form-control bg-one border-0">
                                </div>
                            </div>
                            <div class="form-group-login">
                                <div class="input-group inputLogin mb-4 border rounded-pill p-1">
                                    <input type="text" name="email" placeholder="Masukan Email" aria-describedby="button-addon4" class="form-control bg-one border-0">
                                </div>
                            </div>
                            <div class="form-group-login">
                                <div class="input-group inputLogin mb-4 border rounded-pill p-1">
                                    <input type="password" name="password" placeholder="Masukan Password" aria-describedby="button-addon4" class="form-control bg-one border-0">
                                </div>
                            </div>
                            <div class="form-group-login">
                                <div class="input-group inputLogin  mb-4 border rounded-pill p-1">
                                    <input  type="password" name="password_confirmation" placeholder="Konfirmasi Password" aria-describedby="button-addon4" class="form-control bg-one border-0">
                                </div>
                            </div>
                        </center>
                            <div class="col-md-12">
                                <center>
                                    <button type="submit" class="btn-page-login"><a>Register</a></button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
