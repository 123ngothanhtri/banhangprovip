@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mt-2">
        <h5>Sản phẩm</h5> {!! $product->links() !!}
    </div>
    

    <table class="table table-hover table-bordered table-sm ">
        <tr class="fw-bold alert-info">
            <td>id</td>
            <td>Hình ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Loại</td>
            <td>Đơn giá</td>
            <td>Mô tả</td>
            <td>
                <a class="btn btn-sm btn-success" href="{{ url('product-create') }}"><i class="fas fa-plus"></i></a>
            </td>
        </tr>
        @foreach ($product as $i)
            <tr>
                <td>{{ $i->id_product }}</td>
                <td><img height="100px" src="{{ $i->image_product }}"></td>
                <td>{{ $i->name_product }}</td>
                <td>{{ $i->name_category }}</td>
                <td>{{ number_format($i->price_product) }}₫</td>
                <td>
                    <div style="height: 100px; overflow:auto">
                        {!! $i->description_product !!}
                    </div>
                </td>
                <td>
                    <a href="{{ url('product-delete/' . $i->id_product) }}" onclick="return confirm('Xóa thật chứ ?');" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                    <a href="{{ url('product-edit/' . $i->id_product) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
