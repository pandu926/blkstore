@extends('penjual.layoutpenjual')

@section('konten')


                <form method="POST" action="{{ URL::to('/') }}" enctype="multipart/form-data">
                    @csrf
                <label>id penjual</label>
                <input type="text" name="idpenjual" class="form-control">
                <label>nama barang</label>
                <input type="text" name="namabarang" class="form-control">
                <label>harga</label>
                <input type="text" name="harga" class="form-control">
                <label>jumlah</label>
                <input type="text" name="jumlah" class="form-control">
                <label>berat</label>
                <input type="text" name="berat" class="form-control">
                <label>deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
                
                
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            

                <table border="2">
                    <tr>
                        <td>username</td>
                        <td>email</td>
                        <td>password</td>
                    </tr>
                    @foreach ($penjual as $data)
                    <tr>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->password }}</td>
                        <td><a href="{{ URL::to('penjual/edit/'. $data->id) }}">ubah</a></td>
                        <td><a href="hapus.php?id={{ $data->id }}">hapus</a></td>
                    </tr>
                    @endforeach
                    
                </table>
@endsection