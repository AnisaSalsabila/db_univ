@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Makul
                <a href="{{ route('tambah.makul') }}" class="btn btn-md btn-primary float-right">Tambah</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>KODE MAKUL</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($makul as $mk)
                            <tr>
                                <td>{{ $mk->id}}</td>
                                <td><?php echo $mk->kd_makul ?></td>
                                <td>{{ $mk->nama_makul}}</td>
                                <td>{{ $mk->sks}}</td>
                                <td>
                                    <a href="{{ route('edit.makul', $mk->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus.makul', $mk->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                                @endforeach
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
