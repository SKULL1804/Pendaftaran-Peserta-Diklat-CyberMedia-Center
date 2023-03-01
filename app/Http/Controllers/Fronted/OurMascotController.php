<?php

namespace App\Http\Controllers\Fronted;

use App\Models\OurMascot;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class OurMascotController extends Controller
{
    public function index() {
        $our = OurMascot::all();
        return view('backend.our-mascot.index', [
            "title" => "Our Mascot",
        ] ,compact('our'));
    }

    public function create() {
        return view('backend.our-mascot.create', [
            "title" => "Add Our Mascot",
        ]);
    }

    public function store(Request $request) {
        $image = $request->file('our_mascot');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('img/fronted/mascot/'.$name_gen);
            $save_url = 'img/fronted/mascot/'.$name_gen;

            OurMascot::insert([
                'title' => $request->title,
                'description_title' => $request->description_title,
                'our_mascot' => $save_url,
                'created_at' => Carbon::now(),

            ]);
            session()->flash('success','Mascot Updated, Successfully');
            return redirect()->route('mascot');
    }

    public function edit($id) {
        $our = OurMascot::findOrFail($id);
        return view('backend.our-mascot.edit', [
            "title" => "Edit Our Mascot",
        ] ,compact('our'));
    }

    public function update(Request $request) {
        $mascot_id = $request->id;

        if ($request->file('our_mascot')) {
            $image = $request->file('our_mascot');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('img/fronted/mascot/'.$name_gen);
            $save_url = 'img/fronted/mascot/'.$name_gen;

            OurMascot::findOrFail($mascot_id)->update([
                'title' => $request->title,
                'description_title' => $request->description_title,
                'our_mascot' => $save_url,

            ]);
            session()->flash('success','Mascot Updated, Successfully');
            return redirect()->route('mascot');

        } else{

            OurMascot::findOrFail($mascot_id)->update([
                'title' => $request->title,
                'description_title' => $request->description_title,

            ]);
            session()->flash('success','Mascot Updated, Successfully');
            return redirect()->route('mascot');

        } // end Else
    }

    public Function delete($id){

        $our = OurMascot::findOrFail($id);
        $img = $our->our_mascot;
        unlink($img);

        OurMascot::findOrFail($id)->delete();
        session()->flash('success','Mascot Deleted, Successfully');
            return redirect()->back();
    }

}
