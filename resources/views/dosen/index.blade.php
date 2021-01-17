@extends('layouts.master')
@section('content')
<div class="container">
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-3">
                <div class="col-6">
                <h1>Data Dosen</h1>
                </div>
                <div class="right text-right">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Data Dosen
</button>
<a href="/dosenpdf" class="btn btn-primary btn-sm float-right mr-2">Export</a>
                </div>
           
<table class="table table-sm">
    <tr>
        <th>NIK</th>
        <th>NIDN/NUP</th>
        <th>Nama Dosen</th>
        <th>Jabatan Akademik</th>
        <th>Pendidikan</th>
        <th>Sertifikasi</th>
        <th>Program Studi</th>
        <th>Status</th>
    </tr>
    @foreach($data_dosen as $dosen)
    <tr>
        <td>{{$dosen->NIK}}</td>
        <td>{{$dosen->NIDN_NUP}}</td>
        <td>{{$dosen->Nama_Dosen}}</td>
        <td>{{$dosen->Jabatan_Akademik}}</td>
        <td>{{$dosen->Pendidikan}}</td>
        <td>{{$dosen->Sertifikasi}}</td>
        <td>{{$dosen->Program_Studi}}</td>
        <td>{{$dosen->Status}}</td>
        <td>
          <a href="/dosen/{{$dosen->NIK}}/edit" class="btn btn-warning btn-sm" >Edit</a>
          <form action="/dosen/{{$dosen->NIK}}"method ="POST" >  
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>            
          </form>
      </td>
    </tr>
    @endforeach
</table>
            </div>
        </div>
    


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/dosen" method="POST">
      @csrf
      @method('POST')
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input name="NIK" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NIK"> 
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">NIDN/NUP</label>
                <input name="NIDN_NUP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NIDN_NUP"> 
             </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Nama Dosen</label>
                <input name="Nama_Dosen"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama_Dosen"> 
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Jabatan Akademik</label>
                <select name="Jabatan_Akademik" class="form-control" id="exampleFormControlSelect1">
                <option value="Asisten Ahli">Asisten Ahli</option>
                <option value="Lektor">Lektor</option>
                <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                </select>
            </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Pendidikan</label>
                <select name="Pendidikan"class="form-control" id="exampleFormControlSelect1">
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                </select>
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Sertifikasi</label>
                <select name="Sertifikasi"class="form-control" id="exampleFormControlSelect1">
                <option >Sudah</option>
                <option >Belum</option>
                </select>
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Program Studi</label>
                <select name="Program_Studi" class="form-control" id="exampleFormControlSelect1">
                <option>Teknik Informatika (S1)</option>
                <option>Sistem Informasi (S1)</option>
                <option>Manajemen Informatika (D3)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="Status" class="form-control" id="exampleFormControlSelect1">
                <option>Dosen Tetap Yayasan </option>
                <option>Dosen Tidak Tetap</option>
                <option>Dosen PNS DPK</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
    </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
