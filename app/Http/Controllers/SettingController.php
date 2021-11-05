<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SettingAdmin;
use App\Models\SettingHome;
use App\Models\Slider;

class SettingController extends Controller
{
    function setting(){
        $slider = Slider::orderBy('id_slider','desc')->get();
        return view('admin.setting',compact('slider'));
    }
    function settingAdminUpdate(Request $req){
        $info = SettingAdmin::where('id','1')->update([
            'theme' => $req->theme,
            'effect' => $req->effect,
            'background_login_admin' => $req->background_login_admin,
            'avatar_admin' => $req->avatar_admin,
            'elemental' => $req->elemental,
            'sidebar' => $req->sidebar,
            'font' => $req->font,
            'button_setting' => $req->button_setting,
        ]);
        return back()->with('msg','Đã cập nhật');
    }

    function settingHomeUpdate(Request $req){
        $info = SettingHome::where('id','1')->update([
            'logo' => $req->logo,
            'footer1' => $req->footer1,
            'footer2' => $req->footer2,
            'slider' => $req->slider,
            'carousel_product'=>$req->carousel_product,
        ]);
        return back()->with('msg','Đã cập nhật');
    }
   
    public function sliderAdd(Request $req)
    {
        $slider = new Slider;
        $slider->image_slider = $req->image_slider;
        $slider->save();
        return back()->with('msg','Đã thêm');
    }
    public function sliderDelete($id)
    {
        Slider::destroy($id);
        return back()->with('msg','Đã xóa');
    }
    
}
