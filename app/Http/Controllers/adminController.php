<?php

namespace App\Http\Controllers;

use App\causeDetails;
use App\mail;
use Illuminate\Http\Request;
use App\image;
use App\listimg;
use App\donate;
use App\information;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function image(){
        $image = image::all();
        return view('dashboard.image.image',compact('image'));
    }

    public function addimage(){
        return view('dashboard.image.addimg');
    }

    public function addimagepost(Request $request){
        $image = new image();
        $image->title = $request->title;
        $image->content = $request->contents;
        $image->img = $request->addimg;
        $img = $request->file('addimg');

        if ($img){
            $get_img = $img->getClientOriginalName();
            $name_img = current(explode('.',$get_img));
            $new_img = $name_img.rand(0,99).'.'.$img->getClientOriginalExtension();
            $img->move('public/backend/img',$new_img);
            $image->img = $new_img;
            $image->save();
        }
        $image->img = '';
        return redirect()->route('addimage')->with('thanhcong','Photo added successfully');
    }

    public function imagelist($id){
        $imagelist = listimg::all()->where('img_id',$id);
        return view('dashboard.image.listimg',compact('imagelist'));
    }

    public function donate(){
        $donate = donate::all();
        return view('dashboard.donate.listdonate',compact('donate'));
    }

    public function donatemost(){
        $donate = DB::table('donate')
            ->orderBy('so_tien_donate', 'desc')
            ->limit(5)
            ->get();
        return view('dashboard.donate.donatemost',compact('donate'));
    }

    public function deletedonatemost($id)
    {
        donate::findOrFail($id)->delete();
        return redirect()->route('donatemost')->with('thanhcong','Deleted a donate');
    }

    public function deletedonate($id)
    {
        donate::findOrFail($id)->delete();
        return redirect()->route('donate')->with('thanhcong','Deleted a donate');
    }

    public function donate_active($id){
        DB::table('donate')->where('id',$id)->update(['history'=>1]);
        $donates = donate::all()->where('id', $id);
        foreach ($donates as $donate){
            $amount = causeDetails::all()->where('id', $donate->projects_id);
            foreach ($amount as $value){
                $value->so_tien_khuyen_gop_duoc += $donate->so_tien_donate;
                $value->save();
            }
        }
        return redirect()->route('donate');
    }

}
