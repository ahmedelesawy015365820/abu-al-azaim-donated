<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CounterAbout;
use App\Models\CounterSection;
use App\Models\OneAbout;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TwoAbout;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $setting = Setting::first();
        $services = Service::with('icon','image')->whereStatus(1)->orderBy('sort','asc')->get();
        $teams = Team::get();
        return view('website.team',compact('teams','setting','services'));
    }

}
