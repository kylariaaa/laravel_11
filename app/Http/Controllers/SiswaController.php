<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
class SiswaController extends Controller
{
    public function index() {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }
    public function create() {
        return view('siswa.create');
    }
    public function store(Request $request) {
        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }
    public function edit(Siswa $siswa) {
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, Siswa $siswa) {
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }
    public function destroy(Siswa $siswa) {
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}   
