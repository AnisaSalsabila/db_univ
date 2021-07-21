@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Mahasiswa
                </div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa',$mahasiswa->id) }}" method="POST">
                        @csrf 
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disable selected>--pilih user--</option>
                                        @foreach($user as $u)
                                        <option value="{{ $u->id }}" {{ $mahasiswa->user_id == $u->id ? 'selected' : '' }}>{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" maxlength="8" value="{{ is_null($mahasiswa) ? '' :$mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ is_null($mahasiswa) ? '' :$mahasiswa->tempat_lahir }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ is_null($mahasiswa) ? '' :$mahasiswa->tgl_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" disable selected>--pilih jenis kelamin--</option>
                                        <option value="L" {{ $mahasiswa->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="P" {{ $mahasiswa->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Tambah Nomor Telepon" value="{{ is_null($mahasiswa) ? '' :$mahasiswa->telepon }}">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" cals="2" rows="3" class="form-control" style="resize: none;">{{ is_null($mahasiswa) ? '' :$mahasiswa->alamat }}</textarea>
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
