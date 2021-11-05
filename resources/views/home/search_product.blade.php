@extends('home.layout')
@section('content')
    
<a href="{{ url('/') }}" class="btn btn-secondary mt-2">Trở lại</a>
    <p>Tìm thấy {{ count($product) }} kết quả với từ khóa {{ $keyWord }}</p>
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
                        {{-- <a href="{{ url('/add-to-cart/' . $s->id_product) }}" class="btn d-block btn-warning ">Thêm vào giỏ hàng</a> --}}
                        <a href="{{ url('product-detail/' . $s->id_product) }}" class="btn d-block btn-warning ">Chi tiết</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
