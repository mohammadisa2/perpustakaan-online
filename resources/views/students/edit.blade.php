@extends('layout.main')

@section('title', 'Edit Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="=col-8">
        <h1 class="mt-3">Edit Mahasiswa</h1>
        
        <form action="{{ route('students.update', ['student' => $student->id]) }}" method="post">
               @method('patch')
              @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
            placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
            @error ('nama')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="nrp">Nrp</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" 
            placeholder="Masukkan Nrp" name="nrp" value="{{ $student->nrp }}">
            @error ('nrp')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" 
            placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
            @error ('email')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" 
            placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
            @error ('jurusan')
            <div class="valid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Ubah Data!</button>
        
        </form>
      </div>
    </div>
</div>
@endsection