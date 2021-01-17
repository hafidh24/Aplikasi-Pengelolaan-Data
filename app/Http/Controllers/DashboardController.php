<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'data_mahasiswa'=> \App\Models\Mahasiswa::all(),
            'jumlahmhs' => \App\Models\Mahasiswa::select(DB::raw('COUNT(id)as total'))->first(),
            'jumlahdsn' => \App\Models\Dosen::select(DB::raw('COUNT(NIK)as total'))->first(),
            'jumlahkpg' => \App\Models\Kepegawaian::select(DB::raw('COUNT(id)as total'))->first(),
        ];
        return view('dashboard.index')->with($data);
    }
}
