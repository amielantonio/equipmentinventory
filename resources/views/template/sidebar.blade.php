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
                <span class="icon"><i class="fa fa-dashboard"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
        {{-- END DASHBOARD--}}

        <li class="has-child">
            <a href="{{ route('workstation.index') }}">
                <span class="icon"><i class="fa fa-id-card"></i></span>
                <span>Workstation</span>
                {{--<span class="link-icon"><i class="fa fa-chevron-right"></i></span>--}}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('workstation.index') }}">
                        <span>View Workstations</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('workstations') }}">
                        <span>Assign Station</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('workstation.create') }}">
                        <span>Add New</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- END WORKSTATION --}}

        <li class="has-child">
            <a href="{{route('equipment.index')}}">
                <span class="icon"><i class="fa fa-cube"></i></span>
                <span>Equipment</span>
                {{--<span class="link-icon"><i class="fa fa-chevron-right"></i></span>--}}
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
                <li>
                    <a href="{{route('equipment.create')}}">
                        <span>Request</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}">
                        <span>Categories</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- END EQUIPMENTS--}}

        <li class="has-child">
            <a href="{{ route('employees.index') }}">
                <span class="icon"><i class="fa fa-address-book-o"></i></span>
                <span>Employee</span>
                {{--<span class="link-icon"><i class="fa fa-chevron-right"></i></span>--}}
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

        {{-- END EMPLOYEE --}}

        <li class="has-child">
            <a href="{{ route('computers.index') }}">
                <span class="icon"><i class="fa fa-desktop"></i></span>
                <span>Computer</span>
                {{--<span class="link-icon"><i class="fa fa-chevron-right"></i></span>--}}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ route('computers.index') }}">
                        <span>View All</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('computers.create') }}">
                        <span>Add New</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('computer-build') }}">
                        <span>Build PC </span><span class="badge badge-primary">BETA</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- END COMPUTER--}}


        <li class="has-child">
            <a href="#">
                <span class="icon"><i class="fa fa-cogs"></i></span>
                <span>Settings</span>
                {{--<span class="link-icon"><i class="fa fa-chevron-right"></i></span>--}}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="">
                        <span>Import</span>
                    </a>
                </li>
            </ul>
        </li>
         {{--END SETTINGS --}}

    </ul>
</aside>