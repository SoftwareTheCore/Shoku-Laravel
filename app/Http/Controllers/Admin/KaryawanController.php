<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::orderBy('id_karyawan', 'desc')
            ->paginate(10);

        return view('admin.karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('admin.karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'jabatan' => 'required',
            'no_hp' => 'nullable|max:20',
            'alamat' => 'nullable',
            'tgl_masuk' => 'nullable|date',
            'status' => 'required',
        ]);

        Karyawan::create($request->all());

        return redirect()
            ->route('admin.karyawan.index')
            ->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('admin.karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'jabatan' => 'required',
            'no_hp' => 'nullable|max:20',
            'alamat' => 'nullable',
            'tgl_masuk' => 'nullable|date',
            'status' => 'required',
        ]);

        $karyawan->update($request->all());

        return redirect()
            ->route('admin.karyawan.index')
            ->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()
            ->route('admin.karyawan.index')
            ->with('success', 'Karyawan berhasil dihapus.');
    }
}