@extends('layouts.app')
@section('main_wrapper')
    <div class="account-content">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="container">
                    <a href="{{route('guardian.login')}}"
                        style="color: rgb(139, 139, 139); font-size: 0.85rem; font-weight: 500;">
                        <div class="shadow bg-body rounded card" onmouseover="this.style.borderColor='blue'"
                            onmouseout="this.style.borderColor='transparent'">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="dash-widgetimg">
                                        <span><img src="{{ asset('assets/img/parent.svg') }}"
                                                style="width: 70px; color:aqua; background:rgb(165, 226, 243); padding:10px; border-radius:50%"
                                                alt="img"></span>
                                    </div>
                                    <div class="">
                                        <h5 class="card-title">Guardian Portal</h5>
                                        <p class="card-text">
                                            If you are a guardian, you can sign-in Here
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('staff.login')}}"
                        style="color: rgb(139, 139, 139);font-size:0.85rem; font-weight:500">
                        <div class="shadow bg-body rounded card" onmouseover="this.style.borderColor='green'"
                            onmouseout="this.style.borderColor='transparent'">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="dash-widgetimg">
                                        <span><img src="{{ asset('assets/img/staff.svg') }}"
                                                style="width: 70px; color:rgb(55, 255, 0); background:rgb(165, 243, 179); padding:10px; border-radius:50%"
                                                alt="img"></span>
                                    </div>
                                    <div class="">
                                        <h5 class="card-title">Staff Portal</h5>
                                        <p class="card-text">
                                            If you are a staff, you can sign-in Here
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="{{route('admin.login')}}"
                        style="color: rgb(139, 139, 139);font-size:0.85rem; font-weight:500">
                        <div class="shadow bg-body rounded card" onmouseover="this.style.borderColor='orange'"
                            onmouseout="this.style.borderColor='transparent'">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="dash-widgetimg">
                                        <span><img src="{{ asset('assets/img/admin.svg') }}"
                                                style="width: 70px; color:rgb(239, 153, 4); background:rgb(240, 243, 165); padding:10px; border-radius:50%"
                                                alt="img"></span>
                                    </div>
                                    <div class="">
                                        <h5 class="card-title">Admin Portal</h5>
                                        <p class="card-text">
                                            If you are an admin, you can sign-in Here
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="login-img">
                <img src="{{ asset('assets/img/login.jpg') }}" alt="img" />
            </div>
        </div>
    </div>
@endsection
