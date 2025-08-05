<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clas;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa.index');
    }

    public function create() {
        $clases = Clas::all();
        return view('siswa.create', compact('clases'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'nisn' => 'required | unique:users',
            'alamat' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required | unique:users,no_handphone'
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

        $datauser_store['photo'] = $request->file('photo')->store('profilesiswa', 'public');

        User::create($datauser_store);

        return redirect('/');
    }
}
