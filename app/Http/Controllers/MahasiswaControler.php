<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaControler extends Controller
{

    public function index (){
        $data=Mahasiswa::all();
        return view('mahasiswa/index',compact('data'));
    }
    public function create()
{
    return view('mahasiswa/add');

}
public function store(Request $_request)
{
    // dd ($request->all());
    $this->validate($request, [
        'nim' => 'required',
        'nama_mahasiswa' => 'required|min:10',
        'umur' => 'required|numeric',
    ]);
    $mahasiswa->update($request->all());

    return redirect(url('data-mahasiswa'));
}

public function edit(mahsiswa $mahasiswa){
    return view('dosen.edit', compact('dosen'));
}
   
        public function destroy(Mahasiswa $id)
        
   {
       
    $id->delete();
    return redirect(url('data-mahasiswa'));
   }
}






