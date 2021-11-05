<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\orderDetail;
use Cart;

class CartController extends Controller
{
    public function cart()
    {
        return view('home.cart');
    }
    public function addToCart($id)
    {
        $p = Product::find($id);
        Cart::add($p->id_product,$p->name_product,1,$p->price_product,0,['photo'=>$p->image_product]);
        return back()->with('msg','Đã thêm vào giỏ hàng!');
    }
    function tangsoluong($rowid){
        $ww=Cart::get($rowid);
        $quantity=$ww->qty;
        Cart::update($rowid,$quantity+=1);
        return back();
    }
    function giamsoluong($rowid){
        $ww=Cart::get($rowid);
        $quantity=$ww->qty;
        Cart::update($rowid,$quantity-=1);
        return back();
    }
    
    function cartRemove($id){
        Cart::remove($id);
        return back();
    }
    function orderAdd(Request $req){

        if(Cart::priceTotal()==0){
            return back()->with('failure','Không có sản phẩm để đặt hàng');
        }

        $order = new Order;
        $order->total_order = str_replace(',','',Cart::priceTotal(0));
        $order->name_order = $req->name_order;
        $order->email_order = $req->email_order;
        $order->phone_order = $req->phone_order;
        $order->address_order = $req->address_order;
        $order->save();
        
        foreach(Cart::content() as $c){
            $od = new orderDetail;
            $od->id_order = $order->id_order;
            $od->id_product = $c->id;
            $od->quantity = $c->qty;
            $od->save();
        }
        
        Cart::destroy();
        return view('home.order_success');
    }
}
