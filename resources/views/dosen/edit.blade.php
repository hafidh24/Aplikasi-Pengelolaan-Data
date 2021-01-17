@extends('layouts.master')
@section('content')
<div class="container">
            <h1>Edit Data Dosen</h1>
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-6">
                <div class="collg-12">
         <form action="/dosen/{{ $dosen->NIK }}" method='post'>
               @csrf
               @method('PUT')
               
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input name="NIK" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NIK" value='{{ $dosen->NIK }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">NIDN/NUP</label>
                <input name="NIDN_NUP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NIDN_NUP" value='{{ $dosen->NIDN_NUP }}'> 
             </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Jabatan Akademik</label>
                <select name="Pilihan_Prodi" class="form-control" id="exampleFormControlSelect1">
                <option>Asisten Ahli)</option>
                <option>Lektor</option>
                <option>Tenaga Pengajar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pendidikan</label>
                <select name="Pendidikan"class="form-control" id="exampleFormControlSelect1">
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
                </select>
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Sertifikasi</label>
                <select name="Sertifikasi"class="form-control" id="exampleFormControlSelect1">
                <option>Sudah</option>
                <option>Belum</option>
                </select>
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Program Studi</label>
                <select name="Program Studi"class="form-control" id="exampleFormControlSelect1">
                <option>Teknik Informatika (S1)</option>
                <option>Sistem Informasi (S1)</option>
                <option>Manajemen Informatika (D3)</option>
                </select>
             </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <input name="Status"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Status"value='{{ $dosen->Status }}'> 
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
            </div>
            @endsection