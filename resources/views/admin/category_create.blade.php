@extends('admin.layout')
@section('content')
        <h5>Thêm danh mục</h5>
        <form action="{{ url('category-add') }}" method="post" > @csrf
            Tên danh mục
            <input  type="text" name="name_category" maxlength="100" required class="form-control" >
            Danh mục cha
            <select name="id_category" class="form-select">
                <option value="">-----</option>
                @php
                function showCategories($categories, $parent_id = null, $char = '')
                {
                    foreach ($categories as $key => $i) {
                        // Nếu là chuyên mục con thì hiển thị
                        if ($i->parent_id == $parent_id) {
                            echo '<option value="'.$i->id_category.'">'.$char.' '.$i->name_category.'</option>';
                            // Xóa chuyên mục đã lặp
                            unset($categories[$key]);
            
                            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                            showCategories($categories, $i->id_category, $char . '-----|');
                        }
                    }
                }
                @endphp
                {{ showCategories($category) }}
                
            </select>
            <input value="Lưu lại" type="submit" class="btn btn-success mt-2">
            <a href="{{ url('category') }} " class="btn btn-outline-secondary mt-2">Hủy</a>
        </form>
@endsection
