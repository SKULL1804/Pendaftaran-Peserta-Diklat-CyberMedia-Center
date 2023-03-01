<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Populer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('fronted.index',[
            "title" => "Home",
        ]);
    }


    public function about()
    {
        $about = About::find(1);
        return view('fronted.about_page',[
            "title" => "About",
        ] ,compact('about'));
    }

    public function course()
    {
        return view('fronted.course_page',[
            "title" => "Course",
        ]);
    }

    public function details($id) {
        $populer = Populer::findOrFail($id);
        return view('fronted.course_details',[
            "title" => "Course Details",
        ] ,compact('populer'));
    }

    public function contact() {
        return view('fronted.contact',[
            "title" => "Contact",
        ]);
    }

}
