<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CounterSection;
use App\Models\Faq;
use App\Models\FaqSection;
use App\Models\HomeSlider;
use App\Models\OneAbout;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(app()->getLocale() != 'ar') {
            $homeSliders = HomeSlider::whereStatus(1)->get();
        }else {
            $homeSliders = HomeSlider::whereStatus(1)->take(1)->get();
        }

        $partners = Partner::whereStatus(1)->get();
        $testimonials = Testimonial::whereStatus(1)->get();
        $teams = Team::get();
        // $projects = Project::whereStatus(1)->take(6)->get();
        $counterSections = CounterSection::get();
        $oneAbout = OneAbout::with('details')->first();
        $setting = Setting::first();
        $services = Service::with('icon')->whereStatus(1)->take(4)->orderBy('sort','asc')->get();
        foreach ($services as $service) {
            $service->description_ar = Str::substr($service->description_ar, -84);
            $service->description_en = Str::substr($service->description_en, -84);
        }

        $projects = Project::with('media','projectCategory')->whereStatus(1)->inRandomOrder()->limit(6)->get();
        $latestArticles = Article::latest()->limit(3)->get();

        return view('website.home',compact('homeSliders','setting','partners','latestArticles','testimonials','teams','counterSections','oneAbout','services','projects'));
    }

}
