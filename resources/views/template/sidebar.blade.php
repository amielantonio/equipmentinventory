<aside class="sidebar-container">

    <div class="sidebar-head">
        <div class="logged-in-user">
            <ul class="user-details">
                <li class="user-image">
                    <img src="{{asset('images/spidey.jpg')}}">
                </li>

                <li class="user-name">
                    <span>Peter Parker</span>
                </li>
                <li class="user-position">
                    <span>Web Designer</span>
                </li>

            </ul>
        </div>
    </div>
    {{-- END SIDE BAR HEAD --}}

    <ul class="main-sidebar">

        <li>
            <a href="">
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="">
                <span>Equipments</span>
                <span class="link-icon"><i class="fa fa-plus"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('')}}">View All</a>
                </li>
                <li>
                    <a href="">Add New</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="">
                <span>User</span>
                <span class="link-icon"><i class="fa fa-plus"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="">View All</a>
                </li>
                <li>
                    <a href="">Add New</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="">
                <span>Workstation</span>
                <span class="link-icon"><i class="fa fa-plus"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="">View All</a>
                </li>
                <li>
                    <a href="">Add New</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="">
                <span>Settings</span>
                <span class="link-icon"><i class="fa fa-plus"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="">View All</a>
                </li>
                <li>
                    <a href="">Add New</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>