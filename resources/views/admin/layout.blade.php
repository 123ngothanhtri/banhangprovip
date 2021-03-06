<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @include('layouts.link')
</head>

<body style=" height:101vh">
    <div id="preloader">
        <div id="spinner1">
            <div id="spinner2">
            </div>
        </div>
    </div>
    @if (session('msg'))
        <div id="alerthome" class="alert alert-success animate__animated animate__bounceInLeft " style="position:fixed;top:0;left:30%;z-index:9999">
            <i class="fas fa-check-circle"></i> {{ session('msg') }}
        </div>
    @elseif(session('er'))
    <div id="alerthome" class="alert alert-danger animate__animated animate__bounceInLeft " style="position:fixed;top:0;left:30%;z-index:9999">
        <i class="fas fa-exclamation-triangle"></i> {{ session('er') }}
    </div>
    @else
        <span id="alerthome"></span>
    @endif
    @if ($settingAdmin->sidebar == 0)

        <div class="d-flex">
            <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px;">
                @if ($settingAdmin->avatar_admin == 1)
                    <a href="#" class="text-center text-decoration-none">
                        <img height="100px" src="{{ Auth::guard('admin')->user()->avatar }}" alt="" class="rounded-circle">
                        <h6 class=" text-white">{{ Auth::guard('admin')->user()->name }}</h6>
                    </a>
                    <hr>
                @endif

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ url('dashboard') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/dashboard') bg-success @endif " aria-current="page">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" alt=""> @endif
                            Th???ng k??
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('category') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/category') bg-success @endif ">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" alt=""> @endif
                            Danh m???c
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('product') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/product') bg-success @endif ">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" alt=""> @endif
                            S???n ph???m
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('order') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/order') bg-success @endif ">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" alt=""> @endif
                            ????n h??ng
                        </a>
                    </li>
                    {{-- <li>
                    <a href="{{ url('slider') }}" class="nav-link text-white  @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/slider') bg-success @endif">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" alt=""> @endif
                        Slider
                    </a>
                </li> --}}
                    {{-- <li>
                    <a href="{{ url('my-admin') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/my-admin') bg-success @endif ">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" alt=""> @endif
                        Admin
                    </a>
                </li> --}}
                    {{-- <li>
                    <a href="{{ url('setting') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/setting') bg-success @endif ">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Dendro.png" alt=""> @endif
                        Thi???t l???p
                    </a>
                </li> --}}
                </ul>
            </div>

            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <div class="container-fluid">
                        @if ($settingAdmin->button_setting == 1)
                        <a class=" btn btn-sm btn-dark" href="{{ url('/setting') }}"><i class="fas fa-cog"></i> Thi???t l???p</a>
                        @else
                        <a class=" btn" href="{{ url('/setting') }}">???</a>
                        @endif
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">

                                </li>
                            </ul>
                            <a class="btn btn-info me-2" href="{{ url('/') }}"><i class="fas fa-home"></i> Trang ch???</a>
                            <a class="btn btn-info" href="{{ url('/admin-logout') }}"><i class="fas fa-sign-out-alt"></i> ????ng xu???t </a>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    @elseif($settingAdmin->sidebar == 1)
        <div class="d-flex">
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <div class="container-fluid">
                        @if ($settingAdmin->button_setting == 1)
                        <a class="btn btn-sm btn-dark" href="{{ url('/setting') }}"><i class="fas fa-cog"></i> Thi???t l???p</a>
                        @else
                        <a class="btn" href="{{ url('/setting') }}">???</a>
                        @endif
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">

                                </li>
                            </ul>
                            <a class="btn btn-info me-2" href="{{ url('/') }}"><i class="fas fa-home"></i> Trang ch???</a>
                            <a class="btn btn-info" href="{{ url('/admin-logout') }}"><i class="fas fa-sign-out-alt"></i> ????ng xu???t </a>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px;">
                @if ($settingAdmin->avatar_admin == 1)
                    <a href="#" class="text-center text-decoration-none">
                        <img height="100px" src="{{ Auth::guard('admin')->user()->avatar }}" alt="" class="rounded-circle">
                        <h6 class=" text-white">{{ Auth::guard('admin')->user()->name }}</h6>
                    </a>
                    <hr>
                @endif

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ url('dashboard') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/dashboard') bg-success @endif " aria-current="page">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" alt=""> @endif
                            Th???ng k??
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('category') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/category') bg-success @endif ">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" alt=""> @endif
                            Danh m???c
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('product') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/product') bg-success @endif ">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" alt=""> @endif
                            S???n ph???m
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('order') }}" class="nav-link text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/order') bg-success @endif ">
                            @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" alt=""> @endif
                            ????n h??ng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @else


        <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <div class="container-fluid ">
                <div class=" text-center mx-5">
                    @if ($settingAdmin->avatar_admin == 1)
                        <img height="100px" src="{{ Auth::guard('admin')->user()->avatar }}" alt="" class="rounded-circle">
                        <h6 class=" text-white">{{ Auth::guard('admin')->user()->name }}</h6>
                    @endif
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">

                    <a href="{{ url('dashboard') }}" class="btn text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/dashboard') bg-success @endif " aria-current="page">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" alt=""> @endif
                        Th???ng k??
                    </a>
                    <a href="{{ url('category') }}" class="btn text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/category') bg-success @endif ">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" alt=""> @endif
                        Danh m???c
                    </a>
                    <a href="{{ url('product') }}" class="btn text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/product') bg-success @endif ">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" alt=""> @endif
                        S???n ph???m
                    </a>
                    <a href="{{ url('order') }}" class="btn text-white @if ($_SERVER['REQUEST_URI'] == '/banhangnhanh/public/order') bg-success @endif ">
                        @if ($settingAdmin->elemental == 1) <img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" alt=""> @endif
                        ????n h??ng
                    </a>

                </div>
            </div>
        </nav>




        <div class=" w-100">
            <nav class="navbar navbar-expand-sm navbar-light bg-warning">
                <div class="container-fluid">

                        @if ($settingAdmin->button_setting == 1)
                        <a class="btn-sm btn btn-dark" href="{{ url('/setting') }}"><i class="fas fa-cog"></i> Thi???t l???p</a>
                        @else
                        <a class="btn" href="{{ url('/setting') }}">???</a>
                        @endif

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">

                            </li>
                        </ul>
                        <a class="btn btn-info me-2" href="{{ url('/') }}"><i class="fas fa-home"></i> Trang ch???</a>
                        <a class="btn btn-info" href="{{ url('/admin-logout') }}"><i class="fas fa-sign-out-alt"></i> ????ng xu???t </a>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    @endif


    @include('layouts.script')
</body>

</html>
