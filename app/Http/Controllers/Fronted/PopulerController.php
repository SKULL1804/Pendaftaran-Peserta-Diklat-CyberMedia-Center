<?php

namespace App\Http\Controllers\Fronted;

use App\Models\Populer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class PopulerController extends Controller
{
    public function index() {
        $populer = Populer::all();
        return view('backend.populer.index', [
            "title" => "Diklat Populer",
        ] ,compact('populer'));
    }

    public function create() {
        return view('backend.populer.create', [
            "title" => "Add Diklat Populer",
        ]);
    }

    public function store(Request $request) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(1000,2000)->save('img/diklat/'.$name_gen);
        $save_url = 'img/diklat/'.$name_gen;

        Populer::insert([
            'title' => $request->title,
            'description_title' => $request->description_title,
            'price' => $request->price,
            'schedule' => $request->schedule,
            'available_seats' => $request->available_seats,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        session()->flash('success','Diklat Populer Updated, Successfully');
        return redirect()->route('populer');
    }

    public function edit($id) {
        $populer = Populer::findOrFail($id);
        return view('backend.populer.edit', [
            "title" => "Edit Diklat Populer",
        ] ,compact('populer'));
    }

    public function update(Request $request) {
        $populer_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('img/diklat/'.$name_gen);
            $save_url = 'img/diklat/'.$name_gen;

            Populer::findOrFail($populer_id)->update([
                'title' => $request->title,
                'description_title' => $request->description_title,
                'price' => $request->price,
                'schedule' => $request->schedule,
                'available_seats' => $request->available_seats,
                'image' => $save_url,

            ]);
            session()->flash('success','Diklat Populer Updated, Successfully');
            return redirect()->route('populer');

        } else{

            Populer::findOrFail($populer_id)->update([
                'title' => $request->title,
                'description_title' => $request->description_title,
                'price' => $request->price,
                'schedule' => $request->schedule,
                'available_seats' => $request->available_seats,

            ]);
            session()->flash('success','Diklat Populer Updated, Successfully');
            return redirect()->route('populer');

        } // end Else
    }

    public function delete($id){

        $populer = Populer::findOrFail($id);
        $img = $populer->image;
        unlink($img);

        Populer::findOrFail($id)->delete();
        session()->flash('success','Diklat Populer Deleted, Successfully');
            return redirect()->back();
    }
}
