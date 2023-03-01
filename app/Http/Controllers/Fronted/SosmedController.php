<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\Sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    public function edit() {
        $sosmed = Sosmed::find(1);
        return view('backend.sosmed.edit', [
            "title" => "Sosmed",
        ] ,compact('sosmed'));
    }

    public function update(Request $request) {
        $sosmed_id = $request->id;

        Sosmed::findOrFail($sosmed_id)->update([
            'facebook' => $request->facebook,
            'whatshapp' => $request->whatshapp,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'gmail' => $request->gmail,
            'tiktok' => $request->tiktok,
        ]);

        session()->flash('success','Alamat Updated Successfully');
            return redirect()->back();
    }
}
