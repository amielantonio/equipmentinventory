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
            <a href="{{route('dashboard')}}">
                <span>Dashboard</span>
            </a>
        </li>

        <li class="has-child">
            <a href="#">
                <span>Equipment</span>
                <span class="link-icon"><i class="fa fa-chevron-right"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('equipment.index')}}">
                        <span>View All</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('equipment.create')}}">
                        <span>Add New</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="has-child">
            <a href="#">
                <span>Employee</span>
                <span class="link-icon"><i class="fa fa-chevron-right"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('employees.index') }}">
                        <span>View All</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('employees.create') }}">
                        <span>Add New</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="has-child">
            <a href="#">
                <span>Workstation</span>
                <span class="link-icon"><i class="fa fa-chevron-right"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="">
                        <span>View All</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Add New</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="has-child">
            <a href="#">
                <span>Settings</span>
                <span class="link-icon"><i class="fa fa-chevron-right"></i></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="">
                        <span>Import</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Computer</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Workstations</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>