<?php

namespace App\Http\Controllers;

use App\Models\chuyenmuc;
use Illuminate\Http\Request;

class ChuyenMucController extends Controller
{
    public function index()
    {
        // try {
            $data = chuyenmuc::get();
        return view('admin.page.index', compact('data'));
        // } catch (\Exception $e) {
        //    dd($e);
        // }
    }
    public function store(Request $request)
    {
        chuyenmuc::create([
            'name_column'       => $request->name_column,
            'status'            => $request->status
        ]);
        return redirect('/admin/chuyen-muc/index');
    }


    public function changeStatus($id)
    {
        $chuyenMuc =chuyenmuc::where('id', $id)->first();

        if($chuyenMuc) {
            $chuyenMuc->status = !$chuyenMuc->status;
            toastr()->success('Đổi trạng thái thành công!');
            $chuyenMuc->save();
        }
        return redirect('/admin/chuyen-muc/index');
    }




    public function destroy($id)
    {
        $chuyenMuc = chuyenmuc::where('id', $id)->first();
        if($chuyenMuc){
            $chuyenMuc->delete();
            toastr()->success('Xóa thành công!');
            return redirect('admin/chuyen-muc/index');
        }else{
            toastr()->error('Xóa thất bại!');
            return redirect('admin/chuyen-muc/index');
        }
    }
}
