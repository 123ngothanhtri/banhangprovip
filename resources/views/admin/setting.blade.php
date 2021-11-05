@extends('admin.layout')
@section('content')
    <div class="row">
        {{-- Home --}}

        <div class="col-md-7 alert-info">
            <h5><i class="fas fa-tools"></i> Tùy chỉnh giao diện trang người dùng</h5>
            <form action="{{ url('setting-home-update') }}" method="post">@csrf
                <b>Logo</b>
                <div>
                    <input onfocus="selectText('logo')" onchange="showImg('logo')" id="logo" value="{{ $settingHome->logo }}" placeholder="Link hình ảnh" type="text" name="logo" maxlength="900" required class="form-control form-control-sm">
                    <img id="outputlogo" src="{{ $settingHome->logo }}" style="width: 100px" />
                </div>
                <b>Footer 1</b>
                <textarea rows="3" class="form-control form-control-sm" type="text" name="footer1" required>{{ $settingHome->footer1 }}</textarea>

                <b>Footer 2</b>
                <input class="form-control form-control-sm" value="{{ $settingHome->footer2 }}" type="text" name="footer2" required>

                <table>
                    
                    <tr>
                        <th>
                            Slider
                        </th>
                        <td>
                                <input type="radio" class="custom-control-input" id="slider" name="slider" value="0" @if ($settingHome->slider == 0) checked @endif>
                                <label class="custom-control-label" for="slider">Ẩn</label>
                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="slider2" name="slider" value="1" @if ($settingHome->slider == 1) checked @endif>
                                <label class="custom-control-label" for="slider2">Hiện</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Băng truyền sản phẩm
                        </th>
                        <td>
                            <input type="radio" class="custom-control-input" id="carousel_product" name="carousel_product" value="0" @if ($settingHome->carousel_product == 0) checked @endif>
                            <label class="custom-control-label" for="carousel_product">Ẩn</label>

                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="carousel_product2" name="carousel_product" value="1" @if ($settingHome->carousel_product == 1) checked @endif>
                            <label class="custom-control-label" for="carousel_product2">Hiện</label>
                        </td>
                    </tr>
                </table>

                <button class="btn btn-sm btn-dark " type="submit"><i class="fas fa-save"></i> Lưu lại</button>

            </form>
            <table class="table mt-2 table-hover table-bordered table-sm table-secondary">
                <tr class="fw-bold">
                    <td>
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#sliderModal">
                            <i class="fas fa-plus"></i> Thêm slider
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="sliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm slider</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ url('slider-add') }}" method="post">@csrf

                                            <input class="form-control" type="text" placeholder="Link ảnh" name="image_slider" maxlength="9998" required>
                                            <br>
                                            <input class="btn btn-success" type="submit" value="Thêm">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @foreach ($slider as $i)
                    <tr>
                        <td>
                            <img height="30px" src="{{ $i->image_slider }}">
                            <a href="{{ url('slider-delete/' . $i->id_slider) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>
        {{-- admin --}}
        <div class="col-md-5 alert-warning" style="position: relative;">
            <img width="150px" src="https://i.ibb.co/DD59wNb/s.png" alt="" style="position: absolute; top:0;right:0">

            <h5><i class="fas fa-tools"></i> Tùy chỉnh giao diện trang admin</h5>
            <div class="d-flex rounded bg-waring">
                <div>
                    <img src="{{ Auth::guard('admin')->user()->avatar }}" alt="" class="rounded-circle" style="height:100px;width:100px;object-fit: cover">
                </div>

                <div class="w-100 ">

                    <h6>Thông tin admin</h6>
                        <form action="{{ url('change-name-admin') }}" method="post">@csrf
                            <table>
                                <tr>
                                    <td>Tên:</td>
                                    <td>
                                        <input type="text" value="{{ Auth::guard('admin')->user()->name }}" name="name" maxlength="50" required class="form-control form-control-sm">
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-success">Lưu tên lại</button>
                                    </td>
                                </tr>
                            </table>
                            
                            
                        </form> 
                    <h6>Email: {{ Auth::guard('admin')->user()->email }}</h6>

                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Đổi ảnh
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thay đổi ảnh</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('change-avatar-admin') }}" method="post">@csrf
                                        <input type="hidden" name="id" value="{{ Auth::guard('admin')->user()->id }}">
                                        <input onfocus="selectText('avatar')" onchange="showImg('avatar')" id="avatar" class="form-control" type="text" placeholder="Link hình ảnh" name="avatar" accept="image/*" value="{{ Auth::guard('admin')->user()->avatar }}" required>
                                        <img id="outputavatar" src="{{ Auth::guard('admin')->user()->avatar }}" style="width: 200px" />

                                        <input class="btn btn-success" type="submit" value="Đổi">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <hr>
            <form action="{{ url('setting-admin-update') }}" method="post">@csrf
                <b>Đổi hình nền đăng nhập </b>
                <div>
                    <input onfocus="selectText('bg')" onchange="showImg('bg')" id="bg" value="{{ $settingAdmin->background_login_admin }}" placeholder="Link hình ảnh" type="text" name="background_login_admin" maxlength="900" required class="form-control form-control-sm">
                    <img id="outputbg" src="{{ $settingAdmin->background_login_admin }}" style="width: 200px" />
                </div>

                <table>
                    <tr>
                        <th>
                            Nút thiết lập
                        </th>
                        <td>
                                <input type="radio" class="custom-control-input" id="button_setting" name="button_setting" value="0" @if ($settingAdmin->button_setting == 0) checked @endif>
                                <label class="custom-control-label" for="button_setting">Ẩn</label>
                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="button_setting2" name="button_setting" value="1" @if ($settingAdmin->button_setting == 1) checked @endif>
                                <label class="custom-control-label" for="button_setting2">Hiện</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tuyết rơi
                        </th>
                        <td>
                            <input type="radio" class="custom-control-input" id="effect" name="effect" value="0" @if ($settingAdmin->effect == 0) checked @endif>
                            <label class="custom-control-label" for="effect">Ẩn</label>

                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="effect2" name="effect" value="1" @if ($settingAdmin->effect == 1) checked @endif>
                            <label class="custom-control-label" for="effect2">Hiện</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            icon nguyên tố
                        </th>
                        <td>
                            <input type="radio" class="custom-control-input" id="elemental" name="elemental" value="0" @if ($settingAdmin->elemental == 0) checked @endif>
                            <label class="custom-control-label" for="elemental">Ẩn</label>

                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="elemental2" name="elemental" value="1" @if ($settingAdmin->elemental == 1) checked @endif>
                            <label class="custom-control-label" for="elemental2">Hiện</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sidebar
                        </th>
                        <td>
                            <input type="radio" class="custom-control-input" id="sidebar" name="sidebar" value="0" @if ($settingAdmin->sidebar == 0) checked @endif>
                            <label class="custom-control-label" for="sidebar">Bên trái</label>

                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="sidebar2" name="sidebar" value="1" @if ($settingAdmin->sidebar == 1) checked @endif>
                            <label class="custom-control-label" for="sidebar2">Bên phải</label>
                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="sidebar3" name="sidebar" value="2" @if ($settingAdmin->sidebar == 2) checked @endif>
                            <label class="custom-control-label" for="sidebar3">Bên trên</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Avatar admin
                        </th>
                        <td>
                            <input type="radio" class="custom-control-input" id="spider" name="avatar_admin" value="0" @if ($settingAdmin->avatar_admin == 0) checked @endif>
                            <label class="custom-control-label" for="spider">Ẩn</label>

                        </td>
                        <td>
                            <input type="radio" class="custom-control-input" id="spider2" name="avatar_admin" value="1" @if ($settingAdmin->avatar_admin == 1) checked @endif>
                            <label class="custom-control-label" for="spider2">Hiện</label>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Font chữ
                        </th>
                        <td colspan="2">
                            <select class="form-select form-select-sm" name="font" >
                                <option value="0" @if ($settingAdmin->font == 0) selected @endif>Mặc định</option>
                                <option value="Nunito" @if ($settingAdmin->font == 'Nunito') selected @endif>Nunito</option>
                                <option value="Goldman" @if ($settingAdmin->font == 'Goldman') selected @endif>Goldman</option>
                                <option value="Josefin Sans" @if ($settingAdmin->font == 'Josefin Sans') selected @endif>Josefin Sans</option>
                                <option value="Patrick Hand SC" @if ($settingAdmin->font =='Patrick Hand SC' ) selected @endif>Patrick Hand SC</option>
                                <option value="Exo 2" @if ($settingAdmin->font == 'Exo 2') selected @endif>Exo 2</option>
                                <option value="Alumni Sans" @if ($settingAdmin->font == 'Alumni Sans') selected @endif>Alumni Sans</option>
                                <option value="Quicksand" @if ($settingAdmin->font == 'Quicksand') selected @endif>Quicksand</option>
                                <option value="Chakra Petch" @if ($settingAdmin->font == 'Chakra Petch') selected @endif>Chakra Petch</option>
                                <option value="Crimson Pro" @if ($settingAdmin->font == 'Crimson Pro') selected @endif>Crimson Pro</option>
                            </select>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Giao diện
                        </th>
                        <td colspan="2">
                            <select class="form-select form-select-sm" name="theme">
                                <option value="0" @if ($settingAdmin->theme == 0) selected @endif>Giao diện mặc định</option>
                                <option value="1" @if ($settingAdmin->theme == 1) selected @endif>Giao diện 1</option>
                                <option value="2" @if ($settingAdmin->theme == 2) selected @endif>Giao diện 2</option>
                                <option value="3" @if ($settingAdmin->theme == 3) selected @endif>Giao diện 3</option>
                                <option value="4" @if ($settingAdmin->theme == 4) selected @endif>Giao diện 4</option>
                                <option value="5" @if ($settingAdmin->theme == 5) selected @endif>Giao diện 5</option>
                                <option value="6" @if ($settingAdmin->theme == 6) selected @endif>Giao diện 6</option>
                                <option value="7" @if ($settingAdmin->theme == 7) selected @endif>Giao diện 7</option>
                                <option value="8" @if ($settingAdmin->theme == 8) selected @endif>Giao diện 8</option>
                                <option value="9" @if ($settingAdmin->theme == 9) selected @endif>Giao diện 9</option>
                                <option value="10" @if ($settingAdmin->theme == 10) selected @endif>Giao diện 10</option>
                                <option value="11" @if ($settingAdmin->theme == 11) selected @endif>Giao diện 11</option>
                                <option value="12" @if ($settingAdmin->theme == 12) selected @endif>Giao diện 12</option>
                                <option value="13" @if ($settingAdmin->theme == 13) selected @endif>Giao diện 13</option>
                                <option value="14" @if ($settingAdmin->theme == 14) selected @endif>Giao diện 14</option>
                                <option value="15" @if ($settingAdmin->theme == 15) selected @endif>Giao diện 15</option>
                                <option value="16" @if ($settingAdmin->theme == 16) selected @endif>Giao diện 16</option>
                                <option value="17" @if ($settingAdmin->theme == 17) selected @endif>Giao diện 17</option>
                                <option value="18" @if ($settingAdmin->theme == 18) selected @endif>Giao diện 18</option>
                                <option value="19" @if ($settingAdmin->theme == 19) selected @endif>Giao diện 19</option>
                                <option value="20" @if ($settingAdmin->theme == 20) selected @endif>Giao diện 20</option>
                                <option value="21" @if ($settingAdmin->theme == 21) selected @endif>Giao diện 21</option>
                                <option value="22" @if ($settingAdmin->theme == 22) selected @endif>Giao diện 22</option>
                                <option value="23" @if ($settingAdmin->theme == 23) selected @endif>Giao diện 23</option>
                                <option value="24" @if ($settingAdmin->theme == 24) selected @endif>Giao diện 24</option>
                                <option value="25" @if ($settingAdmin->theme == 25) selected @endif>Giao diện 25</option>
                                <option value="26" @if ($settingAdmin->theme == 26) selected @endif>Giao diện 26</option>
                            </select>
                        </td>
                    </tr>
                </table>


                <button type="submit" class="btn btn-sm btn-dark"><i class="fas fa-save"></i> Lưu lại</button>

            </form>


        </div>
    </div>



    {{-- ---------------------------------------------------------------------------------------------------- --}}






    <script type="text/javascript">
        function selectText(id) {
            document.getElementById(id).select();
        }

        function showImg(id) {
            var x = document.getElementById(id).value;
            document.getElementById("output" + id).src = x;
        }
    </script>
@endsection
