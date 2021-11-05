@extends('home.layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    @if ($settingHome->slider == 1)
        <div class="owl-carousel" id="owl1">
            @foreach ($slider as $s)
                <img class="w-100" src="{{ $s->image_slider }}">
            @endforeach
        </div>
    @endif

    @if ($settingHome->carousel_product == 1)
    <p class="alert-warning rounded text-center p-1">Sản phẩm nổi bật</p>
    <div class="owl-carousel mt-2" id="owl2">
        @foreach ($product as $i)
            <div class="shadow rounded">
                <img style="width:100%;object-fit:contain" src="{{ $i->image_product }}">
                <div class="px-2 pb-2 ">
                    <b>{{ $i->name_product }}</b>
                    <br>
                    <b class="text-danger">{{ number_format($i->price_product) }}₫</b>
                    <a href="{{ url('product-detail/' . $i->id_product) }}" class="btn btn-sm d-block btn-dark">Chi tiết</a>
                    <a href="{{ url('add-to-cart/' . $i->id_product) }}" class="btn btn-sm d-block btn-info"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>

                </div>
            </div>
        @endforeach
    </div>
@endif

    <form action="{{ url('/selective-product') }}" method="post" class="d-flex mb-2">@csrf
        <select class="form-control w-25 me-2" name="category">
            <option value="0">Tất cả</option>
            @foreach ($category as $i)
                <option value="{{ $i->id_category }}">{{ $i->name_category }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-info">Lọc</button>
    </form>


    <p class="alert-warning rounded text-center p-1">Tất cả sản phẩm</p>

    <div class="row">
        @foreach ($product as $s)
            <div class="col-md-3 mb-2">
                <div class="border shadow rounded h-100">
                    <img width="100%" style="object-fit:cover " src="{{ $s->image_product }}">
                    <div class="px-2 pb-2">
                        <a class="text-dark  text-decoration-none" href="{{ url('product-detail/' . $s->id_product) }}">
                            {{ $s->name_product }}
                            <b class="text-danger d-block">{{ number_format($s->price_product) }}₫</b>
                        </a>
                        <a href="{{ url('add-to-cart/' . $s->id_product) }}" class="btn d-block btn-warning "><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="d-flex justify-content-center">{!! $data->links() !!}</div> --}}


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script>
        $('#owl1').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            autoplaySpeed: 500,
            responsive: {
                0: {
                    items: 1
                }
            }
        })
        $('#owl2').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            autoplaySpeed: 500,
            responsive: {
                0: {
                    items: 2
                },
                300: {
                    items: 3
                },
                700: {
                    items: 4
                },
                900: {
                    items: 5
                },
                1100: {
                    items: 6
                }
            }
        })
    </script>
@endsection
