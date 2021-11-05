<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        $sanPhamDaBanNhieuNhat = DB::table('product')
        ->select('name_product','price_product','image_product')
        ->selectRaw('(select SUM(quantity) FROM order_detail WHERE order_detail.id_product=product.id_product) as daban ')
        ->havingRaw('daban is not null')
        ->orderByRaw('daban desc')
        ->limit(3)
        ->get();
    
        $tongDanhThu = DB::table('order')
        ->selectRaw('sum(total_order) as tongdanhthu')
        ->first();
    
        $tongSoLuongBan = DB::table('order_detail')
        ->selectRaw('sum(quantity) as tongsoluongban')
        ->first();
    
        $dhcxn = DB::table('order')->where('status_order','0')->count('id_order');
        $dh = DB::table('order')->count('id_order');
        $lsp = DB::table('category')->count('id_category');
        $sp = DB::table('product')->count('id_product');
    
        return view('admin.dashboard',compact('dhcxn','sp','tongSoLuongBan','tongDanhThu','lsp','dh','sanPhamDaBanNhieuNhat'));
    
    }
}

   