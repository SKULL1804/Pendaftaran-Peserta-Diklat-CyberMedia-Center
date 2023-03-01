<?php

namespace App\Http\Controllers\Fronted;

use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::find(1);
        return view('backend.about.edit', [
            "title" => "Tentang Kami",
        ] ,compact('about'));
    }

    public function update(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1024,768)->save('img/fronted/about/'.$name_gen);
            $save_url = 'img/fronted/about/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'list' => $request->list,
                'two_list' => $request->two_list,
                'three_list' => $request->three_list,
                'short_descrption' => $request->short_descrption,
                'two_short_descrption' => $request->two_short_descrption,
                'about_image' => $save_url,

            ]);
            session()->flash('success','About Page Updated without Image Successfully');
            return redirect()->back();

        } else{

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'list' => $request->list,
                'two_list' => $request->two_list,
                'three_list' => $request->three_list,
                'short_descrption' => $request->short_descrption,
                'two_short_descrption' => $request->two_short_descrption,

            ]);
            session()->flash('success','About Page Updated without Image Successfully');
            return redirect()->back();

        } // end Else

    } // End Method

    public function gallery()
    {
        return view('backend.about.gallery', [
            'title' => 'Gallery',
        ]);
    }

    public function store(Request $request){

        $image = $request->file('gallery');

        foreach ($image as $gallery) {

           $name_gen = hexdec(uniqid()).'.'.$gallery->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($gallery)->resize(1080,608)->save('img/fronted/gallery/'.$name_gen);
            $save_url = 'img/fronted/gallery/'.$name_gen;

            Gallery::insert([
                'gallery' => $save_url,
                'created_at' => Carbon::now()

            ]);

             } // End of the froeach

            session()->flash('success','Gallery Inserted Successfully');
            return redirect()->route('all.gallery');
    }

    public function allgallery(){
        $allgallery = Gallery::all();
        return view('backend.about.all_gallery', [
            'title' => 'Gallery'],compact('allgallery'));
    }

    public function editgallery($id){
        $gallery = Gallery::findOrFail($id);
        return view('backend.about.edit_gallery', [
            "title" => "Update Gallery",
        ] ,compact('gallery'));
    }

    public function updategallery(Request $request){

        $gallery_id = $request->id;

        if ($request->file('gallery')) {
            $image = $request->file('gallery');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1080,608)->save('img/fronted/gallery/'.$name_gen);
            $save_url = 'img/fronted/gallery/'.$name_gen;

            Gallery::findOrFail($gallery_id)->update([
                'gallery' => $save_url,

            ]);
            session()->flash('success','Gallery Updated Successfully');
            return redirect()->route('all.gallery');
        }
    }

    public Function deletegallery($id){

        $all = Gallery::findOrFail($id);
        $img = $all->gallery;
        unlink($img);

        Gallery::findOrFail($id)->delete();
        session()->flash('success','Gallery Deleted Successfully');
            return redirect()->back();
    }
}
