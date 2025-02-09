<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProjekController extends Controller
{
    public function index()
    {
        $projek = Project::all();
        return view('admin.projek.index', compact('projek'));
    }

    public function create()
    {
        return view('admin.projek.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_projek' => 'required|string|max:255',
            'deskripsi_projek' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('projek', 'public');
        }

        try {
            Project::create([
                'judul_projek' => $request->judul_projek,
                'deskripsi_projek' => $request->deskripsi_projek,
                'foto' => $fotoPath,
            ]);

            return redirect()->route('admin.projek.index')->with('success', 'Project berhasil ditambahkan!');
        } catch (\Exception $e) {
            Log::error($e);
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }


    public function edit($id)
    {
        $projek = Project::findOrFail($id);
        return view('admin.projek.edit', compact('projek'));
    }

    public function update(Request $request, $id)
    {
        $projek = Project::findOrFail($id);

        $request->validate([
            'judul_projek' => 'required|string|max:255',
            'deskripsi_projek' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'judul_projek' => $request->judul_projek,
            'deskripsi_projek' => $request->deskripsi_projek,
        ];

        if ($request->hasFile('foto')) {
            if ($projek->foto) {
                Storage::disk('public')->delete($projek->foto);
            }

            $data['foto'] = $request->file('foto')->store('projek', 'public');
        }

        try {
            $projek->update($data);
            return redirect()->route('admin.projek.index')->with('success', 'Project berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error($e);
            return back()->with('error', 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $projek = Project::findOrFail($id);
        $projek->delete();

        return redirect()->route('admin.projek.index')->with('success', 'Berhasil menghapus pendidikan!');
    }

}
