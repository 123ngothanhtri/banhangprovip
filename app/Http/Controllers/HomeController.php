<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;


class HomeController extends Controller
{
    function home(){
        $product = Product::all();//->paginate(20);
        $category = Category::all();
        $slider = Slider::all();

        return view('home.home',compact('slider','product','category'));
    }
    function orderSuccess(){
        return view('home.order_success');
    }
    function productDetail($id){
        $productDetail = Product::find($id);
        $productRelated = Product::where('id_category',$productDetail->id_category)->get();

        return view('home.product_detail',compact('productDetail','productRelated'));
    }
    function searchProduct(Request $req){
        $keyWord = $req->keyWord;
        $product = Product::join('category', 'product.id_category', 'category.id_category')
                    ->where('name_product','like',"%$keyWord%")
                    ->orWhere('id_product','like',"%$keyWord%")
                    ->orWhere('name_category','like',"%$keyWord%")
                    ->get();//->stake(30)->paginate(5);
        return view('home.search_product',compact('keyWord','product'));
    }
    function selectiveProduct(Request $req){
        if($req->category==0){
            $product = Product::all();
        }
        else {
            $product = Product::all()->where('id_category',$req->category);
        }
        $category = Category::all();

        return view('home.selective_product',compact('product','category'));
    }
    
}
