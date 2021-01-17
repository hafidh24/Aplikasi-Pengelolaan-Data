@extends('layouts.master')
@section('content')
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-3">
                <div class="col-6">
                <h1>Data Mahasiswa</h1>
                </div>
                <div class="right text-right">

                <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Data Mahasiswa
</button>
<a href="/mhspdf" class="btn btn-primary btn-sm float-right mr-2">Export</a>
</div>
           
<table class="table table-sm">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Pilihan Prodi</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Lengkap</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>KTP</th>
        <th>KK</th>
        <th>No.HP</th>
        <th>Aksi</th>
    </tr>
    @foreach($data_mahasiswa as $mahasiswa)
    <tr>
        <td>{{$mahasiswa->NPM}}</td>
        <td>{{$mahasiswa->Nama}}</td>
        <td>{{$mahasiswa->Pilihan_Prodi}}</td>
        <td>{{$mahasiswa->Tempat_Lahir}}</td>
        <td>{{$mahasiswa->Tanggal_lahir}}</td>
        <td>{{$mahasiswa->Jenis_kelamin}}</td>
        <td>{{$mahasiswa->Alamat_lengkap}}</td>
        <td>{{$mahasiswa->Kecamatan}}</td>
        <td>{{$mahasiswa->Kabupaten}}</td>
        <td>{{$mahasiswa->KTP}}</td>
        <td>{{$mahasiswa->KK}}</td>
        <td>{{$mahasiswa->No_HP}}</td>
        <td>
          <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm" >Edit</a>
          <form action="/mahasiswa/{{$mahasiswa->id}}"method ="POST" >  
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
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/mahasiswa" method="post">
      @csrf
      @method('POST')
            <div class="form-group">
                <label for="exampleInputEmail1">NPM</label>
                <input name="NPM" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NPM"> 
             </div>
             <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="Nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama"> 
             </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilihan Prodi</label>
                <select name="Pilihan_Prodi" class="form-control" id="exampleFormControlSelect1">
                <option>Teknik Informatika (S1)</option>
                <option>Sistem Informasi (S1)</option>
                <option>Manajemen Informatika (D3)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="Tempat_Lahir"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Tempat Lahir"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="Tanggal_lahir"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="Tanggal Lahir"> 
             </div>

             <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="Jenis_kelamin"class="form-control" id="exampleFormControlSelect1">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
                </select>
             </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                <textarea name="Alamat_lengkap"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Kecamatan</label>
                <input name="Kecamatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kecamatan"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Kabupaten</label>
                <input name="Kabupaten"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kabupaten"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">KTP</label>
                <input name="KTP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="KTP"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">KK</label>
                <input name="KK"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="KK"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">No_HP</label>
                <input name="No_HP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="No_HP"> 
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
@endsection
