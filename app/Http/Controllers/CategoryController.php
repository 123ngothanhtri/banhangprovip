<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    function category(){
        $category = Category::all();

        return view('admin.category',compact('category'));

        //return view('admin.category', compact('categories'));

    //     $categories = Category::whereNull('parent_id')
    //     ->with('childrenCategories')
    //     ->get();
    // return view('admin.category', compact('categories'));
    // $categories = Category::whereNull('category_id')
    //     ->with('childrenCategories')
    //     ->get();
    // return view('admin.category', compact('categories'));
    }

    public function categoryAdd(Request $req)
    {
        $category = new Category;
        $category->name_category = $req->name_category;
        $category->parent_id = $req->id_category;
        $category->save();
        return back()->with('msg','Đã thêm');
    }
    public function categoryEdit($id)
    {
        $category = Category::find($id);
        return view('admin.category_edit',compact('category'));
    }
    public function categoryUpdate(Request $req)
    {
        $category = Category::find($req->id_category);
        $category->name_category = $req->name_category;
        $category->save();
        return redirect('/category')->with('msg','Đã cập nhật');
    }
    public function categoryDelete($id)
    {
        $product = Product::where('id_category',$id)->first();
        if($product){
            return back()->with('er','Có sản phẩm thuộc danh mục này');
        }
        else{
            $category = Category::destroy($id);
            return back()->with('msg','Xóa thành công');
        }
    }
    public function categoryCreate(){
        $category = Category::all();

        return view('admin.category_create',compact('category'));
    }
    
}
