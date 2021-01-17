@extends('layouts.master')
@section('content')
<div class="container">
            <h1>Edit Data Kepegawaian</h1>
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-6">
                <div class="collg-12">
         <form action="/kepegawaian/{{ $kepegawaian->id }}" method='post'>
               @csrf
               @method('PUT')
               
               <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="Nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama" value='{{ $kepegawaian->Nama }}'> 
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input name="NIK"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NIK" value='{{ $kepegawaian->NIK }}'> 
             </div>

             <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                <textarea name="Alamat"class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $kepegawaian->Alamat }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">NPWP</label>
                <input name="NPWP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NPWP"value='{{ $kepegawaian->NPWP }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">No_HP</label>
                <input name="No_HP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="No_HP"value='{{ $kepegawaian->No_HP }}'> 
             </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan</label>
                <input name="Pendidikan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Pendidikan"value='{{ $kepegawaian->Pendidikan }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan Terakhir Pada Saat Diangkat</label>
                <input name="Pendidikan_Terakhir_Pada_Saat_Diangkat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Pendidikan_Terakhir_Pada_Saat_Diangkat"value='{{ $kepegawaian->Pendidikan_Terakhir_Pada_Saat_Diangkat}}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">NO SK Awal Pengangkatan</label>
                <input name="NO_SK_Awal_Pengangkatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NO_SK_Awal_Pengangkatan"value='{{ $kepegawaian->NO_SK_Awal_Pengangkatan}}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">TMT SK Awal Pengangkatan</label>
                <input name="TMT_SK_Awal_Pengangkatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="TMT_SK_Awal_Pengangkatan"value='{{ $kepegawaian->TMT_SK_Awal_Pengangkatan}}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Berkala Kenaikan</label>
                <input name="Berkala_Kenaikan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Berkala_Kenaikan"value='{{ $kepegawaian->Berkala_Kenaikan}}'> 
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            @endsection
