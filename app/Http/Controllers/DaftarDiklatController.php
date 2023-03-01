<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DaftarDiklatController extends Controller
{
    public function index()
    {
        $diklat = Diklat::all();
        return view('backend.diklat.index', [
            "title" => "Daftar Diklat",
        ], compact('diklat'));
    }

    public function create() {
        return view('backend.diklat.create', [
            "title" => "Add Daftar Diklat",
        ]);
    }

    public function store(Request $request) {

        Diklat::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);
        session()->flash('success','Daftar Diklat Updated, Successfully');
        return redirect()->route('daftar-diklat.index');
    }

    public function edit($id)
    {
        $diklat = Diklat::findOrFail($id);
        return view('backend.diklat.edit', [
            "title" => "Edit Daftar Diklat",
        ] ,compact('diklat'));
    }

    public function update(Request $request,$id)
    {
        Diklat::findOrFail($id)->update([
            'name' => $request->name,

        ]);
        session()->flash('success','Daftar Diklat Updated, Successfully');
        return redirect()->route('daftar-diklat.index');
    }

    public function delete($id){

        Diklat::findOrFail($id)->delete();

        session()->flash('success','Daftar Diklat Deleted, Successfully');
        return redirect()->route('daftar-diklat.index');

    } // End Method

}
