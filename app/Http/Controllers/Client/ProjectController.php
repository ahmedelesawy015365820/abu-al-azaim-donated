<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $Projects = Project::whereStatus(1)->with('projectChallengeSolutions','media','projectCategory')->orderBy('sort','asc')->get();
        foreach ($Projects as $project) {
            $project->description_ar = Str::substr($project->description_ar, -84);
            $project->description_en = Str::substr($project->description_en, -84);
        }
        $setting = Setting::first();
        $services = Service::with('icon','image')->whereStatus(1)->orderBy('sort','asc')->get();
        return view('website.project',compact('Projects','setting','services'));
    }
    public function show($slug)
    {    
          $project = Project::with(['projectCategory','media','projectChallengeSolutions'=>function($q){
            $q->orderBy('sort','asc');
        }])->where('slug_ar',$slug)->orWhere('slug_en',$slug)->firstOrFail();

       // المشروع السابق (أقل من ID الحالي)
        $previousProject = Project::where('status', 1)
            ->where('id', '<', $project->id)
            ->orderBy('id', 'desc')
            ->first();

        // المشروع التالي (أكبر من ID الحالي)
        $nextProject = Project::where('status', 1)
            ->where('id', '>', $project->id)
            ->orderBy('id', 'asc')
            ->first();


            $setting = Setting::first();
            $services = Service::with('icon','image')->whereStatus(1)->orderBy('sort','asc')->get();

        return view('website.projectDetails',compact('project','previousProject','nextProject','setting','services'));
    }

}
