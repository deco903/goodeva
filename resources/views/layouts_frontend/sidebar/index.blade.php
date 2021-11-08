<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-home"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <ul aria-expanded="false">
                        <li><a href="{{route('page.km')}}">Kapal Milik Pribadi</a></li>
                        <li><a href="{{route('page.sw')}}">Kapal Sewa</a></li>
                        <li><a href="">Agency</a></li>
                    </ul>
                </ul>
            </li>
            <li class="nav-label">Apps</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-calculator"></i><span class="nav-text">Inventory</span></a>
                <ul aria-expanded="false">
                    <ul aria-expanded="false">
                        <li><a href="{{route('invspn')}}">SPN</a></li>
                        <li><a href="{{route('invgmb')}}">GMB</a></li>
                        <li><a href="{{route('inventory')}}">Report</a></li>
                    </ul>
                </ul>
            </li>
            <li><a href="{{ url('page_km/kru') }}" aria-expanded="false">
            <i class="fas fa-database"></i><span
                class="nav-text">Data Kru Kapal</span></a>
            </li>
        </ul>
    </div>
</div>