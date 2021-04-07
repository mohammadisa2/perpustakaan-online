@extends('layout.main')

@section('title', 'Tambah Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="=col-8">
        <h1 class="mt-3">Tambah Mahasiswa</h1>
        
    <form method="post" action="/students">
    @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
            placeholder="Masukkan Nama" name="nama">
            @error ('nama')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="nrp">Nrp</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" 
            placeholder="Masukkan Nrp" name="nrp">
            @error ('nrp')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" 
            placeholder="Masukkan Email" name="email">
            @error ('email')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" 
            placeholder="Masukkan Jurusan" name="jurusan">
            @error ('jurusan')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Tambah Data!</button>
        
        </form>
      </div>
    </div>
</div>
@endsection