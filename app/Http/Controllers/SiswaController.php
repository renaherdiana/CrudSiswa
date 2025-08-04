<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiswaController extends Controller
{
 //mengarahkan ke halaman index
 public function index() {
    return view ('siswa.index');
 }

 //
 public function create() {
    return view ('siswa/create');
 }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required'
        ]);

        $datauser_store = [
            'clas_id' => $request->kelas_id,
            'photo' => 'foto.jpg',
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_handphone' => $request->no_handphone
        ];

        User::create($datauser_store);

        return redirect('/');
    }
}
