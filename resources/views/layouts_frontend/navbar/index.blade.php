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
                             @foreach ($notif as $item)    
                            <li class="media dropdown-item">
                                    <span class="success"><i class="fas fa-folder-plus"></i></span>
                                    <div class="media-body media-active">
                                        <a>
                                           @if ($item->log_id == 1)
                                           <span class="text-primary font-weight-bold">{{ $item->users->name }} / {{ $item->task }} / {{Carbon\Carbon::parse($item->created_at)->format("d M Y h:i:s")}}</span>
                                           @elseif ($item->log_id == 2)
                                           <span class="font-weight-bold">{{ $item->users->name }} / {{ $item->task }} / {{Carbon\Carbon::parse($item->created_at)->format("d M Y h:i:s")}}</span>
                                           @else
                                           <span class="text-danger font-weight-bold">{{ $item->users->name }} / {{ $item->task }} / {{Carbon\Carbon::parse($item->created_at)->format("d M Y h:i:s")}}</span>
                                           @endif
                                          
                                        </a>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                            <a class="all-notification" data-toggle="modal" data-target="#modalNotif"><font color="black">See all notifications<i
                                    class="ti-arrow-right"></i> </font> </a>
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

<!-- See All Notification -->
                <div class="modal fade" id="modalNotif" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">All Notification</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <ul class="list-unstyled" id="submit-list">
                                <?php $count = 0 ?>
                                    @foreach ($notifall as $item)    
                                    <li class="media dropdown-item notif-unread">
                                            <span class="success"><i class="fas fa-folder-plus mr-2 mb-3"></i></span>
                                            <div class="media-body media-active">
                                                <a>
                                                @if ($item->log_id == 1)
                                                <span class="text-primary font-weight-bold">{{ $item->users->name }} / {{ $item->task }} / {{Carbon\Carbon::parse($item->created_at)->format("d M Y h:i:s")}}</span>
                                                @elseif ($item->log_id == 2)
                                                <span class="font-weight-bold">{{ $item->users->name }} / {{ $item->task }} / {{Carbon\Carbon::parse($item->created_at)->format("d M Y h:i:s")}}</span>
                                                @else
                                                <span class="text-danger font-weight-bold">{{ $item->users->name }} / {{ $item->task }} / {{Carbon\Carbon::parse($item->created_at)->format("d M Y h:i:s")}}</span>
                                                @endif
                                                <?php $count++; ?>
                                                </a>
                                            </div>
                                            <span class="notify-time" id="waktu-notif"></span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>