@extends('layoutadmin')

@section('konten')
    <h1>edit data</h1>
   
                <div class="modal-body">
                    <form method="get" action="{{ URL::to('admin/daftar') }}">
                    @method('patch')
                        @csrf
                    <label>nama anime</label>
                    <input type="text" name="nama" class="form-control" value="{{ $post->nama }}">
                    <label>durasi</label>
                    <input type="text" name="durasi" class="form-control" value="{{ $post->durasi }}">
                    <label>rating</label>
                    <input type="text" name="rating" class="form-control" value="{{ $post->rating }}">
                    <label>link</label>
                    <input type="text" name="link" class="form-control" value="{{ $post->link }}">
                    <label>foto</label>
                    <input type="text" name="gambar" class="form-control" value="{{ $post->gambar }}">
                    <label>tags</label>
                    <input type="text" name="tags" class="form-control" value="">
                      
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
            
         
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
@endsection