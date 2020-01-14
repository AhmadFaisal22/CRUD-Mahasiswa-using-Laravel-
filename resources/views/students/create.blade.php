@extends('Layout/main')

@section('title','Form Tambah Data')
@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="/students">
                @csrf
                
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama"
                  value="{{ old('nama') }}"">
                  @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nama" value="{{ old('nim') }}"placeholder="Masukkan Nim" name="nim">
                    @error('nim')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Fakultas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="fakultas">
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Ilmu Budaya">Ilmu Budaya</option>
                        <option value="Teknik">Teknik</option>
                        <option value="Ekonomi dan bisnis">Ekonomi dan bisnis</option>
                        <option value="Kesehatan">Kesehatan</option>
                    </select>
                </div>
  
                <div class="form-group">
                    <label for="nama">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="nama" value="{{ old('jurusan') }}" placeholder="Masukkan Jurusan" name="jurusan">
                    @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </form>
        </div>
    </div>
  </div>
@endsection