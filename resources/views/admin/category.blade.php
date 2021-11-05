@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <h5>Danh mục</h5>

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="alert-info">
                    <th>#</th>
                    <th>Danh mục</th>
                    <th>
                        <a href="{{ url('category-create') }}" class="btn btn-sm btn-info">Thêm</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-plus"></i> Thêm
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('category-add') }}" method="post">@csrf
                                            <input class="form-control" type="text" placeholder="Tên danh mục" name="name_category" required autofocus><br />
                                            
                                            <input class="btn btn-success" type="submit" value="Thêm">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($category as $i)
                    <tr>
                        <td>{{ $i->id_category }}</td>
                        <td>{{ $i->name_category }}</td>
                        <td>
                            <a href="{{ url('category-delete/' . $i->id_category) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a>
                            <a href="{{ url('category-edit/' . $i->id_category) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Cập nhật</a>
                        </td>
                    </tr>
                @endforeach --}}
                @php
                function showCategories($categories, $parent_id = null, $char = '')
                {
                    foreach ($categories as $key => $i) {
                        // Nếu là chuyên mục con thì hiển thị
                        if ($i->parent_id == $parent_id) {
                            echo '<tr>';
                            echo '<td>'.$i->id_category.'</td>';
                            echo '<td>'. $char.' ' . $i->name_category.'</td>';
                            echo '<td><a href="'.url('category-delete/' . $i->id_category) .'" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a><a href="'. url('category-edit/' . $i->id_category) .'" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Cập nhật</a></td>';
                            echo '</tr>';
                            // Xóa chuyên mục đã lặp
                            unset($categories[$key]);
            
                            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                            showCategories($categories, $i->id_category, $char . '-----|');
                        }
                    }
                }
                @endphp
                {{ showCategories($category) }}
            </tbody>
        </table>
    </div>
    <hr>






@endsection
