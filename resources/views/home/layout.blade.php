<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bán hàng</title>
    @include('layouts.link')
</head>

<body>
    <div id="preloader">
        <div id="spinner1">
            <div id="spinner2"></div>
        </div>
    </div>

    @if (session('msg'))
        <div id="alerthome" class="alert alert-success animate__animated animate__bounceInLeft " style="position:fixed;top:0px;left:30%;z-index:9999">
            <i class="fas fa-check-circle"></i> {{ session('msg') }}
        </div>
    @elseif(session('failure'))
        <div id="alerthome" class="alert alert-warning animate__animated animate__bounceInLeft " style="position:fixed;top:0px;left:30%;z-index:9999">
            <i class="fas fa-exclamation-triangle"></i> {{ session('failure') }}
        </div>
    @else
        <span id="alerthome"></span>
    @endif

    {{-- <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ $settingHome->logo }}" height="50px" alt="">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold btn btn-danger" href="{{ url('/') }}"><i class="fas fa-home"></i> Trang chủ</a>
                    </li>
                </ul>

                <form action="{{ url('search-product') }}" method="POST" class="d-flex me-2">@csrf
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" name="keyWord" required>
                    <input type="submit" class="btn btn-success" value="Tìm kiếm">

                </form>
                <a class="btn btn-warning" href="{{ url('/cart') }}"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
            </div>
        </div>
    </nav> --}}
    @include('layouts.header')
    <div class="container" style="margin-top: 50px">
        @yield('content')
    </div>

    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
