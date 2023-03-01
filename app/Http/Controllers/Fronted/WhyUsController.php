<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function edit()
    {
        $why = WhyUs::find(1);
        return view('backend.why-us.edit', [
            "title" => "Why Us",
        ] ,compact('why'));
    }

    public function update(Request $request)
    {
        $why_id = $request->id;

        WhyUs::findOrFail($why_id)->update([
            'title' => $request->title,
            'description_title' => $request->description_title,
        ]);

        session()->flash('success','Why Us Updated Successfully');
            return redirect()->back();

    }
}
