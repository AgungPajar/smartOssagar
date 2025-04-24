<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::all();
        return view('ekskul.index', ['ekskul' => $ekskul]);
    }

    public function create()
    {
        return view('ekskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required',
            'password' => 'required|min:6',
        ]);

        Ekskul::create($request->only('nama_ekskul', 'password'));

        return redirect('ekskul')->with('success', 'Ekskul berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Ekskul::findOrFail($id);
        return view('ekskul.edit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ekskul' => 'required',
            'password' => 'required|min:6',
        ]);

        Ekskul::where('id_ekskul', $id)->update($request->only('nama_ekskul', 'password'));

        return redirect('ekskul')->with('success', 'Ekskul berhasil diupdate!');
    }

    public function destroy($id)
    {
        Ekskul::where('id_ekskul', $id)->delete();
        return redirect('ekskul')->with('success', 'Ekskul berhasil dihapus!');
    }
}
