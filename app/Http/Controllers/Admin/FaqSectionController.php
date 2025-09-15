<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FaqSectionRequest;
use App\Http\Resources\Admin\FaqSectionResource;
use App\Models\FaqSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FaqSectionController extends Controller
{

    public function indexPage(Request $request): View
    {
        return view('admin.faqSection.index');
    }

    public function index(Request $request)
    {
        $faqSections = FaqSection::with('media')->paginate(10);
        return responseJson(FaqSectionResource::collection($faqSections->items()),'',200,getPaginates($faqSections));
    }

    public function store(FaqSectionRequest $request): RedirectResponse
    {
        $faqSection = FaqSection::create($request->validated());
        $faqSection->setTranslations($request->translations);
        saveFiles($request->image,$faqSection,"home-slider");
        return responseJson([],'Created Successfully',200);
    }

    public function show($id)
    {
        $faqSection = FaqSection::with(['media','translations'])->find($id);
        return responseJson($faqSection,'Data exited successfully',200);
    }

    public function update(FaqSectionRequest $request, FaqSection $faqSection)
    {
        if ($request->hasFile('image')) 
            saveFiles($request->image,$faqSection,"home-slider",null,'update');

        $faqSection->update($request->validated());
        $faqSection->setTranslations($request->translations);
        return responseJson([],'Updated Successfully',200);
    }

    public function destroy(FaqSection $faqSection)
    {
        deleteFile($faqSection);
        $faqSection->delete();
        return responseJson([],'Deleted Successfully',200);
    }
}
