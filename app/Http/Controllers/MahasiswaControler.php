<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaControler extends Controller
{
    public function create()
{
    return view('mahasiswa/add');

}
public function store(Request $_request)
{
    // dd ($request->all());
    $this->validate($request, [
        'nim' => 'required|unique:mahasiswa',
        'nama_mahasiswa' => 'required|min:10',
        'umur' => 'required|numeric',
    ]);

    mahasiswa::create ($request->all());

    return redirect(url('data-mahasiswa'));
}


   
        public function destroy(Mahasiswa $id)
   {
       
    $id->delete();
    return redirect(url('data-mahasiswa'));
   }
}






