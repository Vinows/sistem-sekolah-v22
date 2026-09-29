<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::all();

        return view('students.index',[
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        
        return view('students.create',[
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        //validasi
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'min:4', 'max:4', 'unique:students,nis'],
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BD'],
            'class' => ['required', 'string']
        ]);

        //Sambungkan Ke Database
        Student::create($validatedRequest);

        //Handle IF Success
        return redirect()->route('students.index');
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ]
        ];

        $students = collect($students)->firstWhere('id', $id);

        return view('students.show',[
            'title' => $title,
            'student' => $students
        ]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ]
        ];

        $students = collect($students)->firstWhere('id', $id);
        
        return view('students.edit', [
            'title' => $title,
            'student'=> $students
        ]);
    }

    public function update($id)
    {
        return "Updating student with ID: {$id}";
    }

    public function destroy($id)
    {
        return "Deleting student with ID: {$id}";
    }
}