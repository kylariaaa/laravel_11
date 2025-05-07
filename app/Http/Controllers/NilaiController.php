<?php

namespace App\Http\Controllers;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
class NilaiController extends Controller
{
    public function index() {
        $nilais = Nilai::with('siswa')->get();
        return view('nilai.index', compact('nilais'));
    }
    public function create() {
        $siswas = Siswa::all();
        return view('nilai.create', compact('siswas'));
    }
    public function store(Request $request) {
        Nilai::create($request->all());
        return redirect()->route('nilai.index');
    }
    public function edit(Nilai $nilai) {
        $siswas = Siswa::all();
        return view('nilai.edit', compact('nilai', 'siswas'));
    }
    public function update(Request $request, Nilai $nilai) {
        $nilai->update($request->all());
        return redirect()->route('nilai.index');
    }
    public function destroy(Nilai $nilai) {
        $nilai->delete();
        return redirect()->route('nilai.index');
    }
}
