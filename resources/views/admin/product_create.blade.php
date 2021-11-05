@extends('admin.layout')
@section('content')
    <h5>Thêm sản phẩm</h5>
    <form action="{{ url('product-add') }}" method="post" enctype="multipart/form-data">@csrf
        Tên sản phẩm
        <input class="form-control" type="text" name="name_product" maxlength="100" required>

        Danh mục
        <select class="form-select" name="id_category">
            @foreach ($category as $i)
                <option value="{{ $i->id_category }}">{{ $i->name_category }}</option>
            @endforeach
        </select>
        
        Đơn giá
        <input class="form-control" type="number" name="price_product" min="0" required>

        Link hình ảnh
        <div>
            <input onchange="showImg()" type="text" name="image_product" id="link_image" maxlength="900" required class="form-control">
            <img id="output_image" style="width: 200px" />
        </div>

        Mô tả
        <textarea name="description_product" id="editor"></textarea>
        
        <input class="btn btn-info " type="submit" value="Thêm">
        <a href="{{ url('product') }}" class="btn btn-outline-secondary">Hủy</a>
    </form>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor');

        function showImg() {
            var x = document.getElementById('link_image').value;
            document.getElementById("output_image").src = x;
        }
    </script>

@endsection
