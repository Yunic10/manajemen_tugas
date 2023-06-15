<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class TugasController extends Controller
{
    public function index()
    {
        //
        return view('Tugas.index', [
            'tugas' => Tugas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Tugas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required|boolean'
        ]);

        $tugas = new Tugas;
        $tugas->judul = $request->judul;
        $tugas->deskripsi = $request->deskripsi;
        $tugas->status = $request->status;
        $tugas->save();

        return redirect()->route('tugas.index');
    }

    /**

     */
    public function edit(string $id)
    {
        //
        return view('Tugas.form', [
            'tugas' => Tugas::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required|boolean'
        ]);

        $tugas = Tugas::find($id);
        $tugas->judul = $request->judul;
        $tugas->deskripsi = $request->deskripsi;
        $tugas->status = $request->status;
        $tugas->save();

        return redirect()->route('tugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tugas::destroy($id);

        return redirect()->route('tugas.index');
    }

    public function show(){
        return view('Tugas.index', [
            'tugas' => Tugas::all()->where('status', true)
        ]);
    }

    public function show_belum(){
        return view('Tugas.index', [
            'tugas' => Tugas::all()->where('status', false)
        ]);
    }

    public function set_status(string $id, string $status) {
        $tugas = Tugas::find($id);
        $tugas->status = (bool) $status;
        $tugas->save();

        return redirect()->route('tugas.index');
    }
}