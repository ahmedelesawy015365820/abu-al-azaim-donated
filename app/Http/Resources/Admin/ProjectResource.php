<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id"         => $this->id,
            "title"      => $this->title_ar,
            "description"=> $this->description_ar,
            "link"      => $this->link,
            "challenge" => $this->challenge_ar,
            "overview"  => $this->overview_ar,
            "country"  => $this->country_ar,
            "industry" => $this->industry,
            "cost"     => $this->cost,
            "client"   => $this->client,
            "core_technologies" => $this->core_technologies,
            "project_category_id" => $this->project_category_id,
            "project_category" => new ProjectCategoryResource($this->whenLoaded('projectCategory')),
            "media"      => $this->media,
            "status"     => $this->status,
            "sort"       => $this->sort,
        ];
    }
}
