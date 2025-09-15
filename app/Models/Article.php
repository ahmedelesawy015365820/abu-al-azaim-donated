<?php

namespace App\Models;

use App\Traits\TranslationsTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory, TranslationsTrait, Sluggable;

    protected $table = 'articles';

    protected $guarded = [
        'id',
    ];

    public function sluggable(): array
    {
        return [
            'slug_ar' => [
                'source' => 'title_ar'
            ],
            'slug_en' => [
                'source' => 'title_en'
            ]
        ];
    }

    protected $casts = ["created_at" => 'datetime'];

    public function category(){
        return $this->belongsTo(ArticleCategory::class,'category_id');
    }

    public function media()
    {
        return $this->morphOne(File::class, 'uploadable');
    }

    public function getTitleAttribute(){
        return app()->getLocale() == 'ar' ? $this->title_ar : $this->title_en; 
    }

    public function getContentAttribute(){
        return app()->getLocale() == 'ar' ? $this->content_ar : $this->content_en; 
    }

    public function getSlugAttribute(){
        return app()->getLocale() == 'ar' ? $this->slug_ar : $this->slug_en;
    }

}