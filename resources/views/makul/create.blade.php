@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Makul</div>

                <div class="card-body">
                    <form action="{{ route('simpan.makul')}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode MataKuliah</label>
                                    <input type="text" name="kd_makul" class="form-control" placeholder="Tambah Kode Makul">
                                </div>
                                <div class="col">
                                    <label for="">Nama MataKuliah</label>
                                    <input type="text" name="nama_makul" class="form-control" placeholder="Tambah Nama Makul">
                                </div>
                                <div class="col">
                                    <label for="">SKS MataKuliah</label>
                                    <input type="text" name="sks" class="form-control" placeholder="Tambah SKS Makul">
                                </div>
                            </div>
                        </div>
                       <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">    
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                </div>
                                <div class="col">    
                                 <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>  
        </div>
    </div>
</div>
@endsection
