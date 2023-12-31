<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::where('created_by1', Auth::user()->id)->latest()->paginate(5);
        return view('admin.kategori.kategori', compact(['kategori']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori'=>'required|unique:kategori,nama_kategori',
        ]);

        Kategori::create([
            'nama_kategori'=>$request->kategori,
            'deskripsi_kategori'=>$request->deskripsi_kategori,
            'created_by1' => Auth::user()->id
        ]);

        return back()->with('success','Berhasil Menambahkan Kategori Baru');
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
        $edit = Kategori::find($id);
        $kategori = Kategori::latest()->paginate(5);
        return view('admin.kategori.kategori_edit', compact(['kategori','edit']));

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
        $request->validate([
            'kategori'=>'required',
        ]);

        Kategori::find($id)->update([
            'nama_kategori'=>$request->kategori,
            'deskripsi_kategori'=>$request->deskripsi_kategori
        ]);

        return to_route('kategori.index')->with('success','Berhasil Memperbaharui Kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::find($id)->delete();

        return to_route('kategori.index')->with('delete', 'Berhasil Menghapus Kategori');
    }
}
