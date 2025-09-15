<?php

namespace Database\Seeders\Home;

use App\Models\Faq;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::truncate();

        $Partners = [
            [
                'link' => 'https://eet-co.com/',
                'title_ar' => "eet",
                'title_en' => "eet",
                'url' => '/website/images/brand/partner1.png',
            ],
            [
                'link' => 'https://eet-co.com/',
                'title_ar' => "eet",
                'title_en' => "eet",
                'url' => '/website/images/brand/partner2.png',
            ],
            [
                'link' => 'https://eet-co.com/',
                'title_ar' => "eet",
                'title_en' => "eet",
                'url' => '/website/images/brand/partner3.png',
            ],
            [
                'link' => 'https://eet-co.com/',
                'title_ar' => "eet ",
                'title_en' => "eet",
                'url' => '/website/images/brand/partner4.png',
            ],
            [
                'link' => 'https://eet-co.com/',
                'title_ar' => "eet",
                'title_en' => "eet",
                'url' => '/website/images/brand/partner5.png',
            ],
            [
                'link' => 'https://eet-co.com/',
                'title_ar' => "eet",
                'title_en' => "eet",
                'url' => '/website/images/brand/partner6.png',
            ],
        ];

        foreach ($Partners as $Partner) {
            $model = Partner::create([
                'url' => $Partner['link'],
                'title_ar' => $Partner['title_ar'],
                'title_en' => $Partner['title_en'],
            ]);
            $model->media()->create([
                'name' =>  $Partner['title_en'],
                'size' => 444,
                'mime_type' => 'sdd',
                'identifier' => null,
                'uploaded_by' =>  1,
                'url' => $Partner['url'],
            ]);
        }

    }
}