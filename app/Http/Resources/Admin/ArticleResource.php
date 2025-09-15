<?php

namespace App\Http\Resources\Admin;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            "id"  => $this->id,
            "title"     => $this->title,
            "content"     => $this->content,
            "media"     => $this->media?->url,
            "status"     => $this->status,
            "slug"     => $this->slug,
            "category"     => $this->category?->title,
            "created_at" => $this->created_at->format("Y-m-d H:i"),
        ];
    }
}
