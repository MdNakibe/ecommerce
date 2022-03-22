<?php

namespace App\Http\Controllers\Admin;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    const UPLOADE_DIR = '/assets/uploads/banners';
    public function index() {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }
    public function add() {
        return view('admin.banner.add');
    }
    public function insert(Request $request) {
        $banners = new Banner();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            //$file->move('/assets/uploads/banners'.$filename);
            $file->move(public_path(self::UPLOADE_DIR),$filename);
            $banners->image = $filename;
        }
        $banners->name = $request->input('name');
        $banners->sort_desciption = $request->input('sort_desciption');
        $banners->status = $request->input('status') == TRUE ? '1':'0';
        $banners->tranding = $request->input('tranding') == TRUE ? '1':'0';

        $banners->save();
        return redirect('banners')->with('status',"Banners Add Successfully");
    }
    public function edit($id) {
        $banners = Banner::find($id);
        return view('admin.banner.edit',compact('banners'));
    }
    public function update(Request $request, $id) {
        $banners =Banner::find($id);
        if($request->hasFile('image')){
            $path = 'assets/uploads/banner/'.$banners->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            //$file->move('/assets/uploads/banners'.$filename);
            $file->move(public_path(self::UPLOADE_DIR),$filename);
            $banners->image = $filename;
        }
        $banners->name = $request->input('name');
        $banners->sort_desciption = $request->input('sort_desciption');
        $banners->status = $request->input('status') == TRUE ? '1':'0';
        $banners->tranding = $request->input('tranding') == TRUE ? '1':'0';
        $banners->update();
        return redirect('banners')->with('status',"Catrgory Update Successfully");
    }

    public function destroy($id) {
        $banners = Banner::find($id);
        if ($banners->image) {
            $path = 'assets/uploads/banner/'.$banners->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $banners->delete();
        return redirect('banners')->with('status',"Banner Delete Successfully");
    }
}
