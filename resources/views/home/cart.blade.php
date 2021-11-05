@extends('home.layout')
@section('content')
    <div class="row">
        <div class="col-md-7">
<div style="min-height:60vh">
            <a href="{{ url('/') }}" class="btn btn-info m-2">Tiếp tục mua hàng <i class="fas fa-angle-double-right"></i></a>
            @if (session('failure'))
                <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> {{ session('failure') }}</div>
            @endif
            <table class="table table-hover ">
                @foreach (Cart::content() as $row)
                    <tr>
                        <td><img src="{{ asset($row->options->has('photo') ? $row->options->photo : '') }}" height="50" width="auto"></td>
                        <td>{{ $row->name }}</td>
                        <td>
                            Số lượng
                            <div>
                                <a class="" href=" {{ url('giamsoluong/' . $row->rowId) }}"><i class="fas fa-minus-square"></i></a>
                                x{{ $row->qty }}
                                <a class="" href=" {{ url('tangsoluong/' . $row->rowId) }}"><i class="fas fa-plus-square"></i></a>
                            </div>
                        </td>
                        <td>{{ number_format($row->priceTotal) }}₫</td>
                        <td>
                            <a class="text-danger" href="{{ url('cart-remove/' . $row->rowId) }}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </table>
            <h5 class="text-danger text-right"><i class="fas fa-coins"></i> Tổng tiền: {{ Cart::priceTotal(0) }}₫</h5>
        </div>
        </div>
        <div class="col-md-5">

        <form action="{{ url('/order-add') }}" method="post">@csrf
            <h5 class="my-3 ">Thanh toán khi nhận hàng</h5>
            <input class="form-control" type="text" placeholder="Họ tên" name="name_order" maxlength="50" required>
            <br>
            <input class="form-control" type="number" placeholder="Số điện thoại" name="phone_order" maxlength="15" required>
            <br />
            <input class="form-control" type="email" placeholder="Email" name="email_order" maxlength="50" required>
            <br>
            <textarea class="form-control" type="text" placeholder="Địa chỉ giao hàng" name="address_order" rows="3" maxlength="200" required></textarea>
            <br />
            <button onclick="return confirm('Đặt hàng thật chứ ?');" class="btn btn-danger mb-3" type="submit"><i class="fas fa-paper-plane"></i> Đặt hàng</button>
        </form>
        </div>
        

        

    </div>
@endsection
