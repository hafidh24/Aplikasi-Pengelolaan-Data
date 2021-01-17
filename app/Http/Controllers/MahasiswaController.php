<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;

use PDF;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\Models\Mahasiswa::all();
    return view('mahasiswa.index',['data_mahasiswa'=>$data_mahasiswa]);
    }
    
    public function exportpdf()
    {
        $data_mahasiswa = \App\Models\Mahasiswa::all();
        $pdf =  PDF::loadView('mahasiswa.export',['data_mahasiswa'=>$data_mahasiswa])->setPaper('a4', 'landscape');
        return $pdf->stream('oke.pdf');
    }
    
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses','data berhasil di input');
    }

    public function edit ($id)
    {
        $data = [
            'mahasiswa' => Mahasiswa::find($id)
        ];
        return view ('mahasiswa.edit')->with($data);
    }

    public function update (Request $request,$id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('suksess','data sudah di update');
    }

    public function destroy ($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
