<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
        <li><a class="mt-3" href="{{route('home')}}" aria-expanded="false"><i class="fas fa-home"></i><span class="nav-text">Home</span></a>
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <ul aria-expanded="false">
                        <li><a href="{{ url('page_km') }}">Kapal Milik Pribadi</a></li>
                        <li><a href="{{ url ('page_sw') }}">Kapal Sewa</a></li>
                        <li><a href="{{ url ('agency')}}">Agency</a></li>
                    </ul>
                </ul>
            </li>
            <li class="nav-label">Apps</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-calculator"></i><span class="nav-text">Inventory</span></a>
                <ul aria-expanded="false">
                    <ul aria-expanded="false">
                        <li><a href="{{route('invspn')}}">SPN</a></li>
                        <li><a href="{{route('invgmb')}}">GBM</a></li>
                        <li><a href="{{route('indexspntgl')}}">Report</a></li>
                    </ul>
                </ul>
            </li>
            <li><a href="{{ route('kru') }}" aria-expanded="false">
            <i class="fas fa-database"></i><span
                class="nav-text">Data Kru Kapal</span></a>
            </li>
        </ul>
    </div>
</div>