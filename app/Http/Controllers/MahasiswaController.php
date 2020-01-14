<?php

 namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Support\Facades\DB;
 use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
   
    public function index()
    {
        // $mhs = DB::table('students')->get();
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index',['mahasiswa'=>$mhs]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
