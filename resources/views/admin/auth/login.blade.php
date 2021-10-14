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
                        <form class="form-auth-small" action="{{ route('post.login') }}" method="POST">
                        <center>
                        @csrf
                        @include('admin.auth.notiflogin.notifemail')
                            <div class="form-group-login">
                                <div class="input-group inputLogin mb-4 border rounded-pill p-1">
                                    <input type="email" name="email"  placeholder="Masukan email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group-login">
                                <div class="input-group inputLogin  mb-4 border rounded-pill p-1">
                                    <input type="password" name="password" placeholder="password" id="password" class="form-control" required>  
                                </div>
                            </div>
                        </center>
                            <div class="form-group">
                                <center> 
                                    <i class="fas fa-lock"></i>
                                    <span class="helper-text-login"> <a href="#">Lupa Password</a></span>
                                    </center>
                            </div>
                            <div class="col-md-12">
                                <center>
                                    <button type="submit" class="btn-page-login"><a>Masuk</a></button>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>