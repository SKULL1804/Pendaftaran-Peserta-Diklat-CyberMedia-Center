<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Alamat;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function edit() {
        $alamat = Alamat::find(1);
        return view('backend.alamat.edit', [
            "title" => "Alamat",
        ] ,compact('alamat'));
    }

    public function update(Request $request) {
        $alamat_id = $request->id;

        Alamat::findOrFail($alamat_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        session()->flash('success','Alamat Updated Successfully');
            return redirect()->back();
    }
}
