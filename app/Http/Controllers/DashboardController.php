<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Diklat;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\OurMascot;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            "title" => "Dashboard",
            "aboutCount" => About::count(),
            "dataCount" => Pendaftaran::count(),
            "messageCount" => Contact::count(),
            "diklatCount" => Diklat::count(),
            "galleryCount" => Gallery::count(),
            "mascotCount" => OurMascot::count(),
        ]);
    }
}

