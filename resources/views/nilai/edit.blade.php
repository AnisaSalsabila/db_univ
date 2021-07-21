@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>

                <div class="card-body">
                    <form action="{{ route('update.nilai',$nilai->id)}}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disable selected>--pilih user--</option>
                                        @foreach($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}"{{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }}>{{ $mhs->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                       </div>
                       <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Matakuliah</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disable selected>--pilih user--</option>
                                        @foreach($makul as $mk)
                                        <option value="{{ $mk->id }}" {{ $nilai->makul_id == $mk->id ? 'selected' : '' }}>{{ $mk->nama_makul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                       </div>
                       <div class="form-group">
                           <div class="form-row">
                                <div class="col">
                                     <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan sks" maxlength="8" value="{{ is_null($nilai) ? '' :$nilai->nilai }}" >
                                </div>
                            </div>
                       </div>
                       <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">    
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                </div>
                                <div class="col">    
                                 <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>  
        </div>
    </div>
</div>
@endsection
