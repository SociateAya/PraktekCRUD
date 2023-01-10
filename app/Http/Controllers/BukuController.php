<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $buku=Buku::all();
       return view("buku",['buku'=>$buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tambah_buku");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku= Buku::create([
            'judul_buku'=> $request->judul_buku,
            'penerbit_buku'=> $request->penerbit_buku,
            'genre_buku'=> $request->genre_buku,
            'harga_buku'=> $request->harga_buku
        ]);
        return redirect ('/buku');


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
        $buku= Buku::where('id_buku', $id)->first();
        return view('edit_buku',['buku'=>$buku]);
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
        Buku::where('id_buku' , $id)
        ->update([
            'judul_buku'=> $request->judul_buku,
            'penerbit_buku'=> $request->penerbit_buku,
            'genre_buku'=> $request->genre_buku,
            'harga_buku'=> $request->harga_buku
        ]);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Buku:: where('id_buku', $id)->delete();
        return redirect('/buku');
    }
}
