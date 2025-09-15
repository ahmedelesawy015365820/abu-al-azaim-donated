<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CounterSection;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
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
        $counterSections = CounterSection::get();
        $testimonials = Testimonial::whereStatus(1)->get();
        $partners = Partner::whereStatus(1)->get();
        foreach ($services as $service) {
            $service->description_ar = Str::substr($service->description_ar, -84);
            $service->description_en = Str::substr($service->description_en, -84);
        }
        return view('website.service',compact('services','setting','counterSections','testimonials','partners'));
    }

    public function show($slug)
    {

        $setting = Setting::first();
        $services = Service::where(app()->getLocale() == 'en' ? 'slug_en':'slug_ar', '!=', $slug)->whereStatus(1)->orderBy('sort','asc')->get();
        $service = Service::with(['image','pdf','icon','serviceFaqs'=>function($q){
            $q->orderBy('sort','asc');
        }])->where('slug_ar',$slug)->orWhere('slug_en',$slug)->firstOrFail();
        return view('website.serviceDetails',compact('service','services','setting'));
    }

}
