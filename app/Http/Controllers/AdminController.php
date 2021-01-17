<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data_admin = \App\Models\Admin::all();
    return view('admin.index',['data_admin'=>$data_admin]);
    }  
    
    public function store(Request $request)
    {
        \App\Models\Admin::create($request->all());
        return redirect('/admin')->with('sukses','data berhasil di input');
    }

    public function edit ($id)
    {
        $data = [
            'admin' => Admin::find($id)
        ];
        return view ('admin.edit')->with($data);
    }

    public function update (Request $request,$id)
    {
        $admin = \App\Models\Admin::find($id);
        $admin->update($request->all());
        return redirect('/admin')->with('suksess','data sudah di update');
    }

    public function destroy ($id)
    {
        $admin = \App\Models\Admin::find($id);
        $admin->delete();
        return redirect('/admin');
    }
}
