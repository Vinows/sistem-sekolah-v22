<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Menampilkan daftar teacher
    public function index()
    {
        $title = "Sistem Sekolah - Edit Guru";
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'Aktif',
            ]
        ];
        
        return view('teachers.index',[
            'title' => $title,
            'teachers' => $teachers
        ]);
    }

    // Menampilkan form tambah teacher
    public function create()
    {
        $title = "Sistem Sekolah - Edit Guru";
        return view('teachers.create', [
            'title' => $title
        ]);
    }

    // Menyimpan teacher baru
    public function store(Request $request)
    {
        return "Storing new teacher";
    }

    // Menampilkan detail teacher
    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Guru";
        return view('teachers.show', [
            'title' => $title
        ]);
    }

    // Menampilkan form edit teacher
    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Guru";
        return view('teachers.edit', [
            'title' => $title
        ]);
    }

    // Mengupdate teacher
    public function update(Request $request, $id)
    {
        return "Updating teacher with ID: {$id}";
    }

    // Menghapus teacher
    public function destroy($id)
    {
        return "Deleting teacher with ID: {$id}";
    }
}
