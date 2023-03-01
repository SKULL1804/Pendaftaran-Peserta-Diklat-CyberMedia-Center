<?php

namespace App\Http\Controllers\Fronted;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    public function edit()
    {
        $hero = Hero::find(1);
        return view('backend.hero.edit', [
            "title" => "Home",
        ] ,compact('hero'));
    }

    public function update(Request $request)
    {
        $hero_id = $request->id;

        Hero::findOrFail($hero_id)->update([
            'title' => $request->title,
            'two_title' => $request->two_title,
            'short_title' => $request->short_title,
        ]);

        session()->flash('success','Home Updated Successfully');
            return redirect()->back();

    }
}
