<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Slider;

use App\Http\Requests\EditSlide;

use Illuminate\Support\Facades\Log;

class SlideController extends Controller
{
    public function Slide(){
        $dulieuslide = DB::table('slide')->paginate(3);
        return view('backend.slide', compact('dulieuslide'));
    }

    public function change($id)
    {
        $user = DB::table('slide')->find($id);
        if($user->trangthai == 0){
            DB::table('slide')->where('id','=',$id)->update(['trangthai'=>1]);
        }else{
            DB::table('slide')->where('id','=',$id)->update(['trangthai'=>0]);
        }
        return redirect()->back();
    }
    
    public function Addslide(){
        return view('backend.add-slide');
    }

    public function Editslide($id){
        $laydulieuslide = DB::table('slide')->find($id);
        return view('backend.edit-slide',compact('laydulieuslide'));
    }

    public function postEditslide($id, EditSlide $request){
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        if(isset($file)){
            $url_img=$file->move('upload/anh_sp', $file->getClientOriginalName());
            $data['images'] = $url_img;
        }else{
            $thongtinslide = DB::table('slide')->find($id);
            $data['images'] = $thongtinslide->images;
        }
        DB::table('slide')
        ->where('id', $id)
        ->update($data);
        return redirect()->route('slide')->with('success', 'Sửa slide thành công');
    }

    public function Deleteslide($id){
        DB::table('slide')->delete($id);
        return redirect()->route('slide')->with('success', 'Xóa slide thành công');
    }

    public function Valiadd(Slider $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $file = $request->images;
        $url_img=$file->move('upload/anh_sp', $file->getClientOriginalName());
        $data['images'] = $url_img;
        $slide = DB::table('slide')->insert($data);
        return redirect()->route('slide')->with('success', 'Thêm slide thành công');
    }
}
