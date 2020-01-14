<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    
    public function index()
    {
        //return Students::all();
         $students = Students::all();
         return view('students.index',compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'nama'      =>'required',
            'nim'       =>'required|size:14',
            'jurusan'   =>'required'
        ]);
        //method 1 success
        Students::create($request->all());
        //method 2 failed
        // Students::create([
        //     'nama'=>$request->nama,
        //     'nim'=>$request->nim,
        //     'fakultas'=>$request->fakultas,
        //     'jurusan'=>$request->jurusan
        // ]);       
        //method 3 success
        //    $student = new Students;
        //    $student->nama = $request->nama;
        //    $student->nim = $request->nim;
        //    $student->fakultas = $request->fakultas;
        //    $student->jurusan = $request->jurusan;
        //    $student->save();
        return redirect('/students')->with('status','Berhasil Menambahkan Mahasiswa');
        
    
    }

    public function show(Students $students)
    {
        //return $students;
        return view ('students.show',compact('students'));
    }

    public function edit(Students $students)
    {
        return view('students.edit',compact('students'));
    }

    public function update(Request $request, Students $students)
    {
        $request->validate([
            'nama'      =>'required',
            'nim'       =>'required|size:14',
            'jurusan'   =>'required'
        ]);
        Students::where('id',$students->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/students')->with('status','Data Berhasil di Update');
    }

    public function destroy(Students $students)
    {
        Students::destroy($students->id);
        
        return redirect('/students')->with('status','Data Berhasil dihapus');
    }
}
