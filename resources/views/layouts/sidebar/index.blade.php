<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{route('home')}}">
                        <span>
                            <img src="{{asset('assets/images/logo.png')}}">
                        </span></a>
                    </div>
                <li>
                    <a class="sidebar-sub-toggle">
                    <i class="ti-home"></i> 
                    Dashboard <span
                    class="badge badge-primary">3</span> <span
                    class="sidebar-collapse-icon ti-angle-down">
                    </span></a>
                    <ul>
                        <li class="sidebar_list">
                            <a href="{{route('page.km')}}">Kapal Milik Pribadi</a></li>
                        <li>
                            <a href="{{route('page.sw')}}">Kapal Sewa</a></li>
                        <li>
                            <a href="#">Kapal Agency</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Accounting<span
                        class="badge badge-primary"></span> <span
                        class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('page.km.inventory')}}">Inventory</a></li>
                            <li><a href="{{route('page.km.quo.km')}}">Quotation</a></li>
                            <li><a href="{{route('page.km.invoice.km')}}">Invoice</a></li>
                        </ul>
                    </li>
                <li><a href=""><i class="ti-email"></i> Email</a></li>
            </ul>
        </div>
    </div>
</div>