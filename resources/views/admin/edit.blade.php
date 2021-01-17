@extends('layouts.master')
@section('content')

            <h1>Edit Data Admin</h1>
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
            <div class="row">
            <div class="ml-6">
                <div class="collg-12">
            </div>
         <form action="/admin/{{ $admin->id }}" method='post'>
               @csrf
               @method('PUT')
               
               <div class="form-group">
                <label for="exampleInputEmail1">User</label>
                <input name="User" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="User"value='{{ $admin->User }}'> 
             </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input name="Password"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Password"User" value='{{ $admin->Password }}'> 
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
            </div>
            @endsection