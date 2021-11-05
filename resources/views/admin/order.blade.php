@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mt-2">
        <h5>Đơn hàng</h5> {!! $order->links() !!}
    </div>

    @foreach ($order as $o)
        <div class="row alert-info m-2 rounded">

            <div class="col-md-6 px-3 py-2">
                <span class="fw-bold" style="font-size:20px">Đơn hàng {{ $o->id_order }}</span>
                <span class="fw-light ">({{ $o->created_at }} - {{ $o->created_at->diffForHumans() }})</span>
                <div class="text-danger">Tổng tiền: {{ number_format($o->total_order) }}₫</div>
                <div>Tên: {{ $o->name_order }}</div>
                <div>Email: {{ $o->email_order }}</div>
                <div>SĐT: {{ $o->phone_order }}</div>
                <div>Địa chỉ giao hàng: {{ $o->address_order }}</div>
                @if ($o->status_order == 0)
                    <div class="text-warning">Chưa xác nhận</div>
                @else
                    <div class="text-success">Đã xác nhận</div>
                @endif

                @if ($o->status_order == 0)
                    <a onclick="return confirm('Xác nhận thật chứ ?');" href="{{ url('order-status/' . $o->id_order) }}" class="btn btn-sm btn-success">Xác nhận</a>
                @endif
                <a onclick="return confirm('Xóa thật chứ ?');" href="{{ url('order-delete/' . $o->id_order) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Xóa</a>

            </div>
            <div class="col-md-6">
                <table class="table mt-1">
                    @foreach ($orderDetail as $od)
                        @if ($o->id_order == $od->id_order)
                            @foreach ($product as $p)
                                @if ($od->id_product == $p->id_product)

                                    <tr>
                                        <td><img height="50px" src="{{ $p->image_product }}"></td>
                                        <td>{{ $p->name_product }}</td>
                                        <td>Đơn giá <span class="text-danger">{{ number_format($p->price_product) }}₫</span> </td>
                                        <td>Số lượng x{{ $od->quantity }}</td>
                                    </tr>

                                @endif
                            @endforeach
                        @endif

                    @endforeach
                </table>
            </div>

        </div>

    @endforeach

@endsection
