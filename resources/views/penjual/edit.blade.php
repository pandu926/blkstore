@extends('penjual.layoutpenjual')

@section('konten')
    <h1>ini halaman edit</h1>

    <form method="POST" action="{{ URL::to('penjual/edit/'. $penjual->id) }}" enctype="multipart/form-data">
        @csrf
    <label>username</label>
    <input type="text" name="username" class="form-control" value="{{ $penjual->username }}">
    <label>email</label>
    <input type="text" name="email" class="form-control" value="{{ $penjual->email }}">
    <label>pasword</label>
    <input type="text" name="password" class="form-control" value="{{ $penjual->password }}">
    
    <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
@endsection