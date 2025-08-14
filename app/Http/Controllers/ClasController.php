<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clas; // Pastikan model Clas sudah ada

class ClasController extends Controller
{
    public function index()
    {
        $classes = Clas::all();
        return view('clas.index', compact('classes'));
    }

    public function create()
    {
        return view('clas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Clas::create($request->only('name', 'description'));

        return redirect()->route('clas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $clas = Clas::findOrFail($id);
        $clas->delete();

        return redirect()->route('clas.index')->with('success', 'Kelas berhasil dihapus!');
    }

    public function edit($id)
    {
        $class = Clas::findOrFail($id);
        return view('clas.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
    // Validasi data
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    // Cari kelas berdasarkan ID
    $class = Clas::find($id);
    if (!$class) {
        return redirect()->route('clas.index')->with('error', 'Kelas tidak ditemukan.');
    }

    // Update data kelas
    $class->name = $request->name;
    $class->description = $request->description;
    $class->save();

    // Redirect ke halaman index
    return redirect()->route('clas.index')->with('success', 'Kelas berhasil diperbarui!');
    }
    // fungsi detail
    public function show($id)
    {
    $class = Clas::with('users')->findOrFail($id); // ambil kelas beserta siswa
    return view('clas.show', compact('class'));
    }

}
