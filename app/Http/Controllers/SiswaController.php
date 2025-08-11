<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clas;
use Illuminate\Support\Facades\Storage;


class SiswaController extends Controller
{
    public function index() {
    //siapkan data siswa
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

    
    //fungsi delete
    public function destroy($id){
        //cari user di dalam database berdasarkan ai yang di kirimkan
        $datauser = User::find($id);
        //lakukan delete pada data tersebut jika data tersebut ada
        if ($datauser != null) {
            Storage::disk('public')->delete($datauser->photo);
            $datauser->delete();
        }
        //kembalikan user ke halaman home
        return redirect('/');
    }

    //fungi detail siswa
    public function show($id) {
        //cari data siswa di dalam tabel user dengan id yang di kirimkan
        $datauser = User::find($id);
        //cek apakah datanya ada atau tidak
        if ($datauser == null) {
            return redirect('/');
        }
        //pindah user ke halaman detail siswa dengan mengirimkan data detailnya
        return view('siswa.show', compact('datauser'));
    }
    //fungsi untuk mengarahkan user ke halaman edit siswa
    public function edit($id) {
        //siapkan data clas dan tampung datanya ke dalam variabel
        $clases = Clas::all();
        //ambil data user berdasarkan yg di kirimkan
        $datauser = User::find($id);
        //cek apakah datanya ada atau tidak
        if ($datauser == null) {
            return redirect('/');
        }
        return view('siswa.edit', compact('clases', 'datauser'));
    }
}
