@extends('Layout/main')

@section('title','Detail Mahasiswa')
@section('container')
    
<div class="mt-3">
    <div class="container">
      <div class="col-5">
        <h1>Detail Mahasiswa</h1>
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$students->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$students->nim}}</h6>
              <p class="card-text">{{$students->fakultas}}</p>
              <p class="card-text">{{$students->jurusan}}</p>
            <a href="/students/{{$students->id}}/edit" class="btn btn-outline-primary">Edit</a>
            <form action="{{$students->id}}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-outline-danger" >Delete</button>
            </form>
            <a href="/students" class="btn btn-outline-secondary">Kembali</a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection