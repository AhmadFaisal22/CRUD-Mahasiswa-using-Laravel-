@extends('Layout/main')

@section('title','Daftar Mahasiswa')
@section('container')
    
<div class="mt-3">
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $mhs)
           
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->fakultas}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
              <a href="" class="btn btn-success">Edit</a>
              <a href="" class=" btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
@endsection