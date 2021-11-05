<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderController extends Controller
{
    function order(){
        $order = Order::orderBy('id_order','desc')->paginate(10);
        $orderDetail = OrderDetail::all();
        $product = Product::all();
        return view('admin.order',compact('order','orderDetail','product'));
    }
    function orderDelete($id){
        $orderDetail = OrderDetail::where('id_order',$id)->delete();
        Order::destroy($id);
        return back()->with('msg','Đã xóa');
    }
    function orderStatus($id){
        $xn = Order::find($id);
        $xn->status_order=1;
        $xn->save();
        return back()->with('msg','Đã xác nhận');
    }
}
