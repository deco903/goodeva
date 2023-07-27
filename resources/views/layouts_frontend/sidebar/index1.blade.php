<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="mt-3" href="/home" aria-expanded="false"><i class="fas fa-home"></i><span class="nav-text">Home</span></a>
            </li>
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="fas fa-home"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    <ul aria-expanded="false">
                        <li><a href="{{ url ('page_km') }}">Kapal Milik Pribadi</a></li>
                        <li><a href="{{ url ('agency') }}">Agency</a></li>
                    </ul>
                </ul>
            </li>
            <li class="nav-label">Apps</li>
            <li><a class="mt-3" href="{{ url ('page_sw/vendor') }}" aria-expanded="false"><i class="fas fa-briefcase"></i><span class="nav-text">Vendor</span></a>
            </li>
        </ul>
    </div>
</div>