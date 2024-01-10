<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            @if ($u_type==="admin" && Auth::guard($u_type)->check())
            <ul>
                <li class="active">
                    <a href="#"><img src="{{ asset('assets/img/icons/dashboard.svg') }}"
                            alt="img"><span> Dashboard</span> </a>
                </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/product.svg') }}" alt="img"><span>
                                Schools</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="productlist.html">Add School</a></li>
                            <li><a href="addproduct.html">View Schools</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img"><span>
                                User Management</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href=#">New User</a></li>
                            <li><a href="#">Users List</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="img"><span>
                                Reports</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="purchaselist.html">Report List</a></li>
                            <li><a href="addpurchase.html">Add New Report</a></li>
                            <li><a href="importpurchase.html">Import Report</a></li>
                        </ul>
                    </li>

            </ul>
            @elseif($u_type==="staff" && Auth::guard($u_type)->check())
            <ul>
                <li class="active">
                    <a href="#"><img src="{{ asset('assets/img/icons/dashboard.svg') }}"
                            alt="img"><span> Dashboard</span> </a>
                </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img"><span>
                                User Management</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href=#">New User</a></li>
                            <li><a href="#">Users List</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="img"><span>
                                Reports</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="purchaselist.html">Report List</a></li>
                            <li><a href="addpurchase.html">Add New Report</a></li>
                            <li><a href="importpurchase.html">Import Report</a></li>
                        </ul>
                    </li>

            </ul>
            @elseif($u_type==="guardian" && Auth::guard($u_type)->check())
            <ul>
                <li class="active">
                    <a href="#"><img src="{{ asset('assets/img/icons/dashboard.svg') }}"
                            alt="img"><span> Dashboard</span> </a>
                </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img"><span>
                                Wards</span> </span></a>
                        {{-- <ul>
                            <li><a href=#">New User</a></li>
                            <li><a href="#">Users List</a></li>
                        </ul> --}}
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><img
                                src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="img"><span>
                                Reports</span> </a>
                        {{-- <ul>
                            <li><a href="purchaselist.html">Report List</a></li>
                        </ul> --}}
                    </li>

            </ul>
            @endif

        </div>
    </div>
</div>
