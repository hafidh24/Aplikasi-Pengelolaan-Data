@extends('layouts.master')
@section('content')
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-3">
                <div class="col-12">
                <h1>Data Admin</h1>
                </div>
                <div class="col-6">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
  Tambah Data Admin
</button>
                </div>
           
<table class="table table-sm">
    <tr>
        <th>User</th>
        <th>Password</th>
    </tr>
    @foreach($data_admin as $admin)
    <tr>
        <td>{{$admin->User}}</td>
        <td>{{$admin->Password}}</td>
        <td>
          <a href="/admin/{{$admin->id}}/edit" class="btn btn-warning btn-sm" >Edit</a>
          <form action="/admin/{{$admin->id}}"method ="POST" >  
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>            
          </form>
    
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
      <form action="/admin" method="post">
      @csrf
      @method('POST')
            <div class="form-group">
                <label for="exampleInputEmail1">User</label>
                <input name="User" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="User"> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input name="Password"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Password"> 
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
