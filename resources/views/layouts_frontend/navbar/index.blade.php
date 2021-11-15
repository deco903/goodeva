<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled" id="submit-list">
                                <li class="media dropdown-item notif-unread">
                                    <span class="success"><i class="fas fa-folder-plus"></i></span>
                                    <div class="media-body media-active">
                                        <a href="#">
                                            <p><strong>Admin</strong> Menambahkan data kapal Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time" id="waktu-notif"></span>
                                </li>
                               
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i
                                    class="ti-arrow-right"></i></a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"> {{ auth()->user()->name }}</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href=" {{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Logout </span>  </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
