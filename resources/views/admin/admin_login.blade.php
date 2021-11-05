<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Đăng nhập vào Admin</title>
</head>

<body>
    <style>
        #trai{
            height: 100vh;
            width: 50%;
            background: #0abde3;
            z-index: 5555;
            position: fixed;
            top: 0px;
            left: 0px;
            transform: translate(-100%,0);
            animation: trai 2s
        }
        @keyframes trai {
            0% {transform: translate(0,0)}
            10% { transform: translate(0, 0);opacity: 0.9;}
            100% { transform: translate(-100%,0);opacity: 0;}
        }
        #phai{
            height: 100vh;
            width: 50%;
            background: #0abde3;
            z-index: 5555;
            position: fixed;
            top: 0px;
            right: 0px;
            transform: translate(100%,0);
            animation: phai 2s
        }
        @keyframes phai {
            0% {transform: translate(0,0)}
            10% { transform: translate(0, 0);opacity: 0.9;}
            100% { transform: translate(100%,0);opacity: 0;}
        }
        /* #noidung{
            height: 100vh;
            width: 100%;
            background: #6fd89e;
            text-align: center;
            padding: 50px;
            z-index: 9999;
            position: fixed;
            top: 0px;
            right: 0px;
            transform: translate(0,100%);
            animation: example 4s ease 1s;
        }
        @keyframes example {
            0% {transform: translate(0,0);}
            90%{transform: translate(0,0);opacity: 1;}
            100%{transform: translate(0,-100%);;opacity: 0;}
        } */
        
        .bgstar{
            position: fixed;
            top:0;
            left: 0;
            width: 100%;
            height: 100vh;
            object-fit: cover;
            mix-blend-mode: screen
        }
    </style>
    <div id="trai"></div>
    <div id="phai"></div>
    <video style="position:fixed;top:0;left:0;width:100%;height:100vh;object-fit:cover" loop autoplay muted >
        <source src="{{ asset('aov1.mp4') }}" type="video/mp4">
      </video>
      {{-- <img class="bgstar" src="{{ asset('bgstar.gif') }}" alt=""> --}}

        <div style="height:100vh ;background-image:url('{{ $settingAdmin->background_login_admin }}');background-size:cover" class="d-flex justify-content-center align-items-center">
        <div class="bg-light rounded shadow p-4" style="width:400px; z-index:99">
            <div class="text-center mb-2">
                <img height="50px" src="{{ $settingHome->logo }}" alt="">
            </div>
            @if (session('er'))
                <div class="alert alert-danger">{{ session('er') }}</div>
            @endif
            @if (session('msg'))
                <div class="alert alert-info">{{ session('msg') }}</div>
            @endif
            <form action="{{ url('/admin-login') }}" method="POST">@csrf
                <input class="form-control mb-3" type="text" placeholder="Tài khoản" name="email" required>
                <input class="form-control mb-3" type="password" placeholder="Mật khẩu" name="password" required>
                <button type="submit" class="btn btn-dark w-100 mb-3">Đăng nhập</button>
            </form>
            <p><a href="{{ url('/') }}" class="text-decoration-none">Trở về trang chủ</a></p>
        </div>
    </div>

</body>




</html>
