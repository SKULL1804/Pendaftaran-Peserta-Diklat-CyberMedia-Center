<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PendaftaranControler extends Controller
{
    public function index() {
        $pendaftaran = Pendaftaran::all();
        return view('pendaftaran.index', [
            "title" => "Data Pendaftaran Diklat",
        ], compact('pendaftaran'));
    }

    public function create() {
        $diklat = Diklat::orderBy('name','ASC')->get();
        return view('pendaftaran.create', [
            "title" => "Pendaftaran",
        ], compact('diklat'));
    }

    public function store(Request $request) {
        $pendaftaran = Pendaftaran::create($request->all());
        if ($request->hasFile('ijazah')) {
            $request->file('ijazah')->move('img/ijazah/', $request->file('ijazah')->getClientOriginalName());
            $pendaftaran->ijazah = $request->file('ijazah')->getClientOriginalName();
            $pendaftaran->save();
        }
        if ($request->hasFile('kartu_keluarga')) {
            $request->file('kartu_keluarga')->move('img/kartu_keluarga/', $request->file('kartu_keluarga')->getClientOriginalName());
            $pendaftaran->kartu_keluarga = $request->file('kartu_keluarga')->getClientOriginalName();
            $pendaftaran->save();
        }
        if ($request->hasFile('ktp')) {
            $request->file('ktp')->move('img/ktp/', $request->file('ktp')->getClientOriginalName());
            $pendaftaran->ktp = $request->file('ktp')->getClientOriginalName();
            $pendaftaran->save();
        }
        if ($request->hasFile('foto_3x3')) {
            $request->file('foto_3x3')->move('img/foto_3x3/', $request->file('foto_3x3')->getClientOriginalName());
            $pendaftaran->foto_3x3 = $request->file('foto_3x3')->getClientOriginalName();
            $pendaftaran->save();
        }
        session()->flash('success','Pendaftaran berhasil, Info selanjutnya akan melalui email ');
        return redirect()->back();
    }

    public function edit($id) {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $diklat = Diklat::orderBy('name','ASC')->get();
        return view('pendaftaran.edit', [
            "title" => "Edit Data Pendaftaran Diklat",
        ], compact('pendaftaran', 'diklat'));
    }

    public function update(Request $request){
        $pendaftaran_id = $request->id;

        Pendaftaran::findOrFail($pendaftaran_id)->update([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'pendidikan' => $request->pendidikan,
            'phone' => $request->phone,
            'daftar_diklat_id' => $request->daftar_diklat_id,
        ]);

        session()->flash('success','Data Pendaftaran Updated, Successfully');
            return redirect()->back();
    }

    public function delete($id){
        Pendaftaran::findOrFail($id)->delete();

        session()->flash('success','Data Pendaftaran Deleted, Successfully');
        return redirect()->back();

    }
}
