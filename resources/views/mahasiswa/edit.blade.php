@extends('layout.master')

@section('judul')
 Ubah Mahasiswa
 @endsection

 @section('content')
 <form method="post" action="/mahasiswa/{{ $mahasiswa->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>NPM</label>
        <input type="text" name="npm" value="{{ $mahasiswa->npm }}" class="form-control">
    </div>
    @error('npm')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" value="{{ $mahasiswa->alamat}}" class="form-control"></textarea>
    </div>

    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
 @endsection