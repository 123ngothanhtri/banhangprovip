@extends('home.layout')
@section('content')
    {{-- @if ($settingAdmin->effect == 1)
        <style>
            .spi {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                background-image: url('{{ asset('ganyu.gif') }}');
                background-size: cover;
                display: flex;
                z-index: 9999;
                justify-content: center;
                align-items: center;
                animation: fadeOut ease 8s;

            }

            @keyframes fadeOut {
                0% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

        </style>
    @endif --}}
    <style>
        #nen{
            height: 100vh;
            width: 100%;
            background: #feca57;
            z-index: 3333;
            position: fixed;
            top: 0px;
            left: 0px;
            transform: translate(0, -100%);
            animation: nen 3s
        }
        @keyframes nen {
            0% { transform: translate(0, 0)}
            90% { transform: translate(0, 0)}
            100% { transform: translate(0,-100%)}
        }
        #trai{
            height: 100vh;
            width: 50%;
            background: #6fd89e;
            z-index: 5555;
            position: fixed;
            top: 0px;
            left: 0px;
            transform: translate(-100%,0);
            animation: trai 1s
        }
        @keyframes trai {
            0% {transform: translate(-100%,0)}
            90% { transform: translate(0, 0)}
            100% { transform: translate(0,0)}
        }
        #phai{
            height: 100vh;
            width: 50%;
            background: #6fd89e;
            z-index: 5555;
            position: fixed;
            top: 0px;
            right: 0px;
            transform: translate(100%,0);
            animation: phai 1s
        }
        @keyframes phai {
            0% {
                transform: translate(100%,0);
            }
            90% { transform: translate(0, 0)}
            100% { transform: translate(0,0)}
        }
        #noidung{
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
        }
    </style>
    <div id="nen"></div>
    <div id="trai"></div>
    <div id="phai"></div>
    <div id="noidung">
        <p class="display-1">Đặt hàng thành công</p>
        <h2>Chúng tôi sẽ liên hệ với bạn để giao hàng</h2>
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250" height="250" width="250"><g transform="matrix(5,0,0,5,0,0)"><defs><style>.c{fill:none;stroke:#45413c;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.25px}</style></defs><rect x="2.21" y="2.21" width="45.58" height="45.58" rx="8.747" ry="8.747" style="fill:#ffffff"></rect><path d="M30.282 43.466H17.008c-6.619 0-11.119-1.847-14.8-6.77v2.347a8.747 8.747 0 0 0 8.747 8.747h28.088a8.747 8.747 0 0 0 8.747-8.747V36.7c-3.678 4.919-10.89 6.766-17.508 6.766z" style="fill:#f0f0f0"></path><rect class="c" x="2.21" y="2.21" width="45.58" height="45.58" rx="8.747" ry="8.747"></rect><path d="M35.773 8.324C29.3 14.875 22.957 21.7 19.541 30.185q-3.128-2.622-6.385-5.095c-3.838-2.925-7.578 3.585-3.785 6.476 3.255 2.48 6.364 5.115 9.391 7.868 1.977 1.8 5.625 1.236 6.268-1.655 2.215-9.96 9.094-17.116 16.047-24.151 3.396-3.436-1.904-8.743-5.304-5.304z" style="fill:#6dd627"></path><path d="M13.777 29.089q2.724 2.076 5.36 4.243a.993.993 0 0 0 1.545-.376c3.515-7.924 9.554-14.4 15.713-20.631a3.559 3.559 0 0 1 5.413.3c1.694-3.348-2.952-7.422-6.035-4.3-6.473 6.55-12.816 13.375-16.232 21.86q-3.128-2.622-6.385-5.1C9.591 22.372 6.109 27.8 8.675 30.9c.736-2.064 2.903-3.487 5.102-1.811z" style="fill:#9ceb60"></path><path class="c" d="M35.773 8.324C29.3 14.875 22.957 21.7 19.541 30.185q-3.128-2.622-6.385-5.095c-3.838-2.925-7.578 3.585-3.785 6.476 3.255 2.48 6.364 5.115 9.391 7.868 1.977 1.8 5.625 1.236 6.268-1.655 2.215-9.96 9.094-17.116 16.047-24.151 3.396-3.436-1.904-8.743-5.304-5.304z"></path></g></svg>
    </div>



    
    <div class="alert-success text-center my-3 p-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" height="200" width="200"><g transform="matrix(0.6,0,0,0.6,0,0)"><defs><style>.c{fill:none;stroke:#45413c;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.25px}</style></defs><rect x="2.21" y="2.21" width="45.58" height="45.58" rx="8.747" ry="8.747" style="fill:#ffffff"></rect><path d="M30.282 43.466H17.008c-6.619 0-11.119-1.847-14.8-6.77v2.347a8.747 8.747 0 0 0 8.747 8.747h28.088a8.747 8.747 0 0 0 8.747-8.747V36.7c-3.678 4.919-10.89 6.766-17.508 6.766z" style="fill:#f0f0f0"></path><rect class="c" x="2.21" y="2.21" width="45.58" height="45.58" rx="8.747" ry="8.747"></rect><path d="M35.773 8.324C29.3 14.875 22.957 21.7 19.541 30.185q-3.128-2.622-6.385-5.095c-3.838-2.925-7.578 3.585-3.785 6.476 3.255 2.48 6.364 5.115 9.391 7.868 1.977 1.8 5.625 1.236 6.268-1.655 2.215-9.96 9.094-17.116 16.047-24.151 3.396-3.436-1.904-8.743-5.304-5.304z" style="fill:#6dd627"></path><path d="M13.777 29.089q2.724 2.076 5.36 4.243a.993.993 0 0 0 1.545-.376c3.515-7.924 9.554-14.4 15.713-20.631a3.559 3.559 0 0 1 5.413.3c1.694-3.348-2.952-7.422-6.035-4.3-6.473 6.55-12.816 13.375-16.232 21.86q-3.128-2.622-6.385-5.1C9.591 22.372 6.109 27.8 8.675 30.9c.736-2.064 2.903-3.487 5.102-1.811z" style="fill:#9ceb60"></path><path class="c" d="M35.773 8.324C29.3 14.875 22.957 21.7 19.541 30.185q-3.128-2.622-6.385-5.095c-3.838-2.925-7.578 3.585-3.785 6.476 3.255 2.48 6.364 5.115 9.391 7.868 1.977 1.8 5.625 1.236 6.268-1.655 2.215-9.96 9.094-17.116 16.047-24.151 3.396-3.436-1.904-8.743-5.304-5.304z"></path></g></svg>
        <p class="display-4">Đặt hàng thành công</p>
        
        <h4>Chúng tôi sẽ liên hệ với bạn để giao hàng</h4>
    </div>
    <a class="btn btn-info w-100 mb-3" href="{{ url('/') }}"><i class="fas fa-shopping-cart"></i> Tiếp tục mua sắm <i class="fas fa-angle-double-right"></i></a>


    {{-- @if ($settingAdmin->effect == 1)
        <div id="xc" class="spi"></div>
        <script>
            setTimeout(function() {
                var x = document.getElementById('xc').style.display = 'none'
            }, 2500)
        </script>
    @endif --}}

@endsection
