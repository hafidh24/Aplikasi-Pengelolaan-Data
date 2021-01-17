@extends('layouts.master')
@section('content')
<div class="container">
            <h1>Edit Data Mahasiswa</h1>
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-3">
                <div class="collg-6">
         <form action="/mahasiswa/{{ $mahasiswa->id }}" method='post'>
               @csrf
               @method('PUT')
               
            <div class="form-group">
                <label for="exampleInputEmail1">NPM</label>
                <input name="NPM" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NPM" value='{{ $mahasiswa->NPM }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="Nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama" value='{{ $mahasiswa->Nama }}'> 
             </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilihan Prodi</label>
                <select name="Pilihan_Prodi" class="form-control" id="exampleFormControlSelect1" value='{{ $mahasiswa->pilihan_Prodi }}'> 
                <option>Teknik Informatika (S1)</option>
                <option>Sistem Informasi (S1)</option>
                <option>Manajemen Informatika (D3)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="Tempat_Lahir"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Tempat Lahir"value='{{ $mahasiswa->Tempat_Lahir }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="Tanggal_lahir"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="Tanggal Lahir"value='{{ $mahasiswa->Tanggal_lahir }}'> 
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="Jenis_kelamin"class="form-control" id="exampleFormControlSelect1" value='{{ $mahasiswa->Jenis_kelamin }}'>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
                </select>
             </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                <textarea name="Alamat_lengkap"class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $mahasiswa->Alamat_lengkap }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Kecamatan</label>
                <input name="Kecamatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kecamatan"value='{{ $mahasiswa->Kecamatan }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Kabupaten</label>
                <input name="Kabupaten"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kabupaten"value='{{ $mahasiswa->Kabupaten }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">KTP</label>
                <input name="KTP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="KTP"value='{{ $mahasiswa->KTP }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">KK</label>
                <input name="KK"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="KK"value='{{ $mahasiswa->KK}}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">No_HP</label>
                <input name="No_HP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="No_HP"value='{{ $mahasiswa->No_HP }}'> 
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            @endsection


