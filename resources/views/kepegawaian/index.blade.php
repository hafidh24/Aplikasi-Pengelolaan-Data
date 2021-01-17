@extends('layouts.master')
@section('content')
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-3">
                <div class="col-6">
                <h1>Data Kepegawaian</h1>
                </div>
                <div class="right text-right">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Data Kepegawaian
</button>
<a href="/gaweanpdf" class="btn btn-primary btn-sm float-right mr-2">Export</a>
                </div>
           
<table class="table table-sm">
    <tr>
        <th>Nama</th>
        <th>NIK</th>
        <th>TTL</th>
        <th>Alamat</th>
        <th>NPWP</th>
        <th>No HP</th>
        <th>Pendidikan</th>
        <th>Pendidikan Terakhir Pada Saat Diangkat</th>
        <th>NO SK Awal Pengangkatan</th>
        <th>TMT SK Awal Pengangkatan</th>
        <th>Berkala Kenaikan</th>    
    </tr>
    @foreach($data_kepegawaian as $kepegawaian)
    <tr>
    <td>{{$kepegawaian->Nama}}</td>
       <td>{{$kepegawaian->NIK}}</td>
        <td>{{$kepegawaian->TTL}}</td>
        <td>{{$kepegawaian->Alamat}}</td>
        <td>{{$kepegawaian->NPWP}}</td>
        <td>{{$kepegawaian->No_HP}}</td>
        <td>{{$kepegawaian->Pendidikan}}</td>
        <td>{{$kepegawaian->Pendidikan_Terakhir_Pada_Saat_Diangkat}}</td>
        <td>{{$kepegawaian->NO_SK_Awal_Pengangkatan}}</td>
        <td>{{$kepegawaian->TMT_SK_Awal_Pengangkatan}}</td>
        <td>{{$kepegawaian->Berkala_Kenaikan}}</td>
        <td>
          <a href="/kepegawaian/{{$kepegawaian->id}}/edit" class="btn btn-warning btn-sm" >Edit</a>
          <form action="/kepegawaian/{{$kepegawaian->id}}"method ="POST" >  
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
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kepegawaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/kepegawaian" method="post">
      @csrf
      @method('POST')
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="Nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input name="NIK"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NIK"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">TTL</label>
                <input name="TTL"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="TTL"> 
             </div>

             <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                <textarea name="Alamat"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">NPWP</label>
                <input name="NPWP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NPWP"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">No_HP</label>
                <input name="No_HP"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="No_HP"> 
             </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan</label>
                <input name="Pendidikan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Pendidikan"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan Terakhir Pada Saat Diangkat</label>
                <input name="Pendidikan_Terakhir_Pada_Saat_Diangkat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Pendidikan_Terakhir_Pada_Saat_Diangkat"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">NO SK Awal Pengangkatan</label>
                <input name="NO_SK_Awal_Pengangkatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="NO_SK_Awal_Pengangkatan"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">TMT SK Awal Pengangkatan</label>
                <input name="TMT_SK_Awal_Pengangkatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="TMT_SK_Awal_Pengangkatan"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Berkala Kenaikan</label>
                <input name="Berkala_Kenaikan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Berkala_Kenaikan"> 
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
