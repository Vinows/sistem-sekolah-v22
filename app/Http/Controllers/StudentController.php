<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])->get();

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

    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show',[
            'title' => $title,
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";

        return view('students.edit', [
            'title' => $title,
            'student' => $student
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