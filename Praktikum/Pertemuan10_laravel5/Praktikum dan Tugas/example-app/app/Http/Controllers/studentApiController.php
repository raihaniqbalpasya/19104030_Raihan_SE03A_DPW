<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentApiController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        // lalu simpan kedalam array terlebih dahulu
        $data['students'] = Student::all();

        // lalu return data array ke API
        return response()->json($data); 
    }

    //Menampilkan data siswa melalui API
    //dengan menggunakan parameter id
    public function getById($id)
    {
        // Ambil data dari database
        // lalu simpan kedalam array terlebih dahulu
        $data['students'] = Student::find($id);

        // lalu return data array ke API
        return response()->json($data);
    }

    //Menampilkan data siswa melalui API
    //dengan menggunakan parameter nim
    public function getByNim($nim)
    {
        // Ambil data dari database
        // lalu simpan kedalam array terlebih dahulu
        $data['students'] = Student::where('nim', $nim) ->first();

        // lalu return data array ke API
        return response()->json($data);
    }

    public function save()
    {

        $student = new Student;
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->department = request('department');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil disimpan"]);
    }

    public function update($id)
    {
        $student = Student::find($id);
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->department = request('department');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil diubah"]);
    }

    public function delete($id)
    {
        //ambil data dari database berdasarkan id
        $student = Student::find($id);

        //hapus data mahasiswa
        $student->delete();

        return response() -> json(['message' => "Data berhasil dihapus"]);
    }
}
