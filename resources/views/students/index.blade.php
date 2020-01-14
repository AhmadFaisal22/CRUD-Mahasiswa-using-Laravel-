@extends('Layout/main')

@section('title','Daftar Mahasiswa')
@section('container')
    
<div class="container">
<div class="row">
    <div class="col-8">
            <h1>Daftar Mahasiswa</h1>
            <a href="/students/create" class="btn btn-primary">Tambah Data Mahasiswa</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group">
                @foreach ($students as $students)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$students->nama}}
                <a href="/students/{{$students->id}}" class="btn btn-info">Detail</a>
                </li>
                @endforeach          
            </ul>
            </div>
        </div>
      </div>
  </div>
@endsection