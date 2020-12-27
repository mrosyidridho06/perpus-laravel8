<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::paginate(20);
        return view('index_buku',['bukus' => $bukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateDataBok = $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
        ]);
        //$bukus
        Buku::create($validateDataBok);
        return redirect()->route('buku_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edbuk=Buku::findOrFail($id);
        return view('action.editbuku', compact('edbuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $edbuk=Buku::findOrFail($id);
        $edbuk->update($request->all());
        // $request->validate([
        //     'nama' => 'required',
        //     'judul' => 'required',
        //     'pengarang' => 'required',
        //     'penerbit' => 'required',
        //     'tahun' => 'required',
        //     'jumlah' => 'required',
        // ]);
        return redirect()->route('buku_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Buku::where('id', $id)->delete();
        return back()->with('success','hapus data sukses');
    }
}
