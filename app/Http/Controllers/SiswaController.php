<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clas;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index() {
        // siapkan data siswa
        $siswas = User::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create() {
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'nisn' => 'required|unique:users',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required|unique:users,no_handphone'
        ]);

        $datauser_store = [
            'clas_id' => $request->kelas_id,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_handphone' => $request->no_handphone
        ];

        // simpan foto
        $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');

        User::create($datauser_store);

        return redirect('/');
    }

    // fungsi delete
    public function destroy($id) {
        $datauser = User::find($id);
        if ($datauser != null) {
            Storage::disk('public')->delete($datauser->photo);
            $datauser->delete();
        }
        return redirect('/');
    }

    // fungsi detail siswa
    public function show($id) {
        $datauser = User::find($id);
        if ($datauser == null) {
            return redirect('/');
        }
        return view('siswa.show', compact('datauser'));
    }

    // fungsi untuk mengarahkan user ke halaman edit siswa
    public function edit($id) {
        $clases = Clas::all();
        $datauser = User::find($id);
        if ($datauser == null) {
            return redirect('/');
        }
        return view('siswa.edit', compact('clases', 'datauser'));
    }

    // fungsi update siswa
    public function update(Request $request, $id) {
        // validasi data
        $request->validate([
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn,' . $id,
            'alamat' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'no_handphone' => 'required|unique:users,no_handphone,' . $id
        ]);

        // siapkan data yg akan di update
        $datauser = User::find($id);
        if (!$datauser) {
            return redirect('/');
        }

        // siapkan data yg akan di update ke dalam tabel
        $datauser->clas_id = $request->kelas_id;
        $datauser->name = $request->name;
        $datauser->nisn = $request->nisn;
        $datauser->alamat = $request->alamat;
        $datauser->email = $request->email;
        $datauser->no_handphone = $request->no_handphone;

        // jika password diisi, update password
        if ($request->filled('password')) {
            $datauser->password = bcrypt($request->password);
        }

        // jika upload foto baru
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($datauser->photo);
            $datauser->photo = $request->file('photo')->store('profilesiswa', 'public');
        }

        // update data sesuai dengan data
        $datauser->save();

        // kembalikan ke halaman index
        return redirect('/')->with('success', 'Data siswa berhasil diperbarui.');
    }
}
