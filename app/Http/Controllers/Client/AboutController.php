<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CounterAbout;
use App\Models\CounterSection;
use App\Models\OneAbout;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\TwoAbout;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
class AboutController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $setting = Setting::first();
        $testimonials = Testimonial::whereStatus(1)->get();
        $oneAbout = OneAbout::with('details')->first();
        $partners = Partner::whereStatus(1)->get();
        $counters = CounterAbout::get();
        $counterSections = CounterSection::get();

        $services = Service::with('icon','image')->whereStatus(1)->inRandomOrder()->limit(3)->get();
        foreach ($services as $service) {
            $service->description_ar = Str::substr($service->description_ar, -84);
            $service->description_en = Str::substr($service->description_en, -84);
        }

        return view('website.about',compact('testimonials','setting','counterSections','oneAbout','partners','counters','services'));
    }

}
