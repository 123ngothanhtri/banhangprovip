@extends('admin.layout')
@section('content')
        <h5>Cập nhật danh mục</h5>
        <form action="{{ url('category-update') }}" method="post" > @csrf
            <input type="hidden" value="{{ $category->id_category }}" name="id_category">
            Tên danh mục
            <input value="{{ $category->name_category }}" type="text" name="name_category" maxlength="100" required class="form-control" >
            <input value="Lưu lại" type="submit" class="btn btn-success mt-2">
            <a href="{{ url('category') }} " class="btn btn-outline-secondary mt-2">Hủy</a>
        </form>
@endsection
