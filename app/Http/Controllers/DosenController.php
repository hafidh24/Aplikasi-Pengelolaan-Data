<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;

class DosenController extends Controller
{
    public function index()
    {
        $data_dosen = \App\Models\Dosen::all();
    return view('dosen.index',['data_dosen'=>$data_dosen]);
    }
    
    public function exportpdf()
    {
        $data_dosen = \App\Models\Dosen::all();
        $pdf =  PDF::loadView('dosen.export',['data_dosen'=>$data_dosen])->setPaper('a4', 'landscape');
        return $pdf->stream('oke.pdf');
    }
    
    public function store(Request $request)
    {
        \App\Models\Dosen::create($request->all());
        return redirect('/dosen')->with('sukses','data berhasil di input');
    }

    public function edit ($NIK)
    {
        $data = [
            'dosen' =>\App\Models\Dosen::find($NIK)
        ];
        return view ('dosen.edit')->with($data);
    }

    public function update (Request $request,$NIK)
    {
        $dosen = \App\Models\Dosen::find($NIK);
        $dosen->update($request->all());
        return redirect('/dosen')->with('suksess','data sudah di update');
    }

    public function destroy ($NIK)
    {
        $dosen = \App\Models\Dosen::find($NIK);
        $dosen->delete();
        return redirect('/dosen');
    }
    public function cetak()
    {
        $data_dosen = \App\Models\Dosen::all();
    return view('dosen.cetak',['data_dosen'=>$data_dosen]);
    }  
}
