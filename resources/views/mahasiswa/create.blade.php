@extends('layout.master')

@section('judul')
 Tambah Mahasiswa
 @endsection

 @section('content')
 <form method="post" action="/mahasiswa">
    @csrf

    <div class="form-group">
        <label>NPM</label>
        <input type="text" name="npm" value="" class="form-control">
    </div>
    @error('npm')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>alamat</label>
        <textarea name="alamat" value="" class="form-control"></textarea>
    </div>

    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
 @endsection