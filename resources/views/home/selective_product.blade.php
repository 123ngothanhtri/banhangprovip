@extends('home.layout')
@section('content')

    <form action="{{ url('/selective-product') }}" method="post" class="d-flex my-2">@csrf
        <select class="form-control w-25 me-2" name="category">
            <option value="0">Tất cả</option>
            @foreach ($category as $i)
                <option value="{{ $i->id_category }}">{{ $i->name_category }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-info">Lọc</button>
    </form>


    <p class="alert-warning rounded text-center p-1">Lọc sản phẩm</p>

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
                        <a href="{{ url('product-detail/' . $s->id_product) }}" class="btn d-block btn-warning ">Chi tiết</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

  
@endsection
