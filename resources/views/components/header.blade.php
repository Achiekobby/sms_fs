<div class="header">

    <div class="header-left active">
        <a href="#" class="logo">
            <img src="{{ asset('assets/img/logo_b.png') }}" style="width: 300px;" alt="">
        </a>
        <a href="#" class="logo-small">
            <img src="{{ asset('assets/img/logo_icon_new.png') }}" alt="">
        </a>

    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">



        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{ asset('assets/img/profiles/default.png') }}" alt="">
                    <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img"><img src="{{ asset('assets/img/profiles/default.png') }}" alt="">
                            <span class="status online"></span></span>
                        <div class="profilesets">
                            <h6>{{ Auth::guard($u_type)->user()->first_name }}</h6>
                            {{-- <h5>{{ Auth::user()->last_name }}</h5> --}}
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i>
                        My Profile</a>
                    @if ($u_type === 'admin')
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item logout pb-0" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"><img
                                    src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">
                                Logout
                            </a>
                        </form>
                    @elseif($u_type === 'staff')
                        <form action="{{ route('staff.logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item logout pb-0" href="{{ route('staff.logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"><img
                                    src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">
                                Logout
                            </a>
                        </form>
                        @elseif($u_type === 'guardian')
                        <form action="{{ route('guardian.logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item logout pb-0" href="{{ route('guardian.logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"><img
                                    src="{{ asset('assets/img/icons/log-out.svg') }}" class="me-2" alt="img">
                                Logout
                            </a>
                        </form>
                    @endif
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
    </div>

</div>
