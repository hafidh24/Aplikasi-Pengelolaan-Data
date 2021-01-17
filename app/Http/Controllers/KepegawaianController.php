<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\Kepegawaian;

class KepegawaianController extends Controller
{
    public function index()
    {
        $data_kepegawaian = \App\Models\Kepegawaian::all();
    return view('kepegawaian.index',['data_kepegawaian'=>$data_kepegawaian]);
    }  

    public function exportpdf()
    {
        $data_kepegawaian = \App\Models\Kepegawaian::all();
        $pdf =  PDF::loadView('kepegawaian.export',['data_kepegawaian'=>$data_kepegawaian])->setPaper('a4', 'landscape');
        return $pdf->stream('oke.pdf');
    }
    
    public function store(Request $request)
    {
        \App\Models\Kepegawaian::create($request->all());
        return redirect('/kepegawaian')->with('sukses','data berhasil di input');
    }

    public function edit ($id)
    {
        $data = [
            'kepegawaian' => Kepegawaian::find($id)
        ];
        return view ('kepegawaian.edit')->with($data);
    }

    public function update (Request $request,$id)
    {
        $dosen = \App\Models\Kepegawaian::find($id);
        $dosen->update($request->all());
        return redirect('/kepegawaian')->with('suksess','data sudah di update');
    }

    public function destroy ($id)
    {
        $dosen = \App\Models\Kepegawaian::find($id);
        $dosen->delete();
        return redirect('/kepegawaian');
    }
}
