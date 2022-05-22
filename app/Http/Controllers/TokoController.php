<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    //
    public function index()
    {
        $datatoko = Toko::all();
        //dd($tokodata);
        return view('toko/index', compact('datatoko'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        
        $this->validate($request,[
            'jenis_barang' => 'required',
            'nama_barang' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        Toko::create($request->all());
        return redirect(url('data-toko'));
    }

    public function destroy(Toko $id)
    {
        $id->delete();
        return redirect(url('data-toko'));
    }

    public function edit(Toko $id)
    {
        return view('toko.edit', compact('id'));
    }

    public function update(Request $request, Toko $toko)
    {
        $this->validate($request,[
            'jenis_barang' => 'required|unique:barang,jenis_barang,. $datatoko->id',
            'nama_barang' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $toko->update($request->all());
        return redirect(url('data-toko'));
    }
}
