<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(){
        return view('siswa.create');
    }
    public function store(Request $request){
        $data = new Siswa;
        $data->nama = $request->nama_siswa;
        $data->nisn = $request->nisn;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('siswa/create');
    }

    public function index(){
        $data = Siswa::paginate(1); 
        return view('siswa.index',compact('data')); 
     }

     public function edit($id){
        $siswa = Siswa::where('id',$id)->first();
        return view('siswa.edit',compact('siswa'));
    }

    public function update(Request $request,$id){
        $data = Siswa::where('id',$id)->first();
        $data->nama = $request->nama_siswa;
        $data->nisn = $request->nisn;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('siswa/list');
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('siswa/list');
    }
}
