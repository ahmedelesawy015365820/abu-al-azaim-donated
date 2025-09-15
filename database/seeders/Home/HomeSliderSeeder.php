<?php

namespace Database\Seeders\Home;

use App\Models\HomeSlider;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeSlider::truncate();

        $model = HomeSlider::create([
            'title_ar' => "حلول تقنية ",
            'title_color_ar' => " للمستقبل الرقمي. ",
            'description_ar' => ' يعرف مشغلو الرسم والطباعة هذا جيدًا ، في الواقع ، جميع المهن التي تتعامل مع عالم الاتصالات لها علاقة مستقرة بهذه الكلمات ',
            'title_en' => "Tech Solutions For",
            'title_color_en' => " Digital Future",
            'description_en' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta modi, libero, ratione quidem quibusdam ullam illo obcaecati .',
            'status' => 1,
            'year' => '2020',
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/website/images/banner/home-banner-bg.jpg',
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'image',
            'uploaded_by' =>  1,
            'url' => '/website/images/banner/banner-lady.png',
        ]);

        $model = HomeSlider::create([
            'title_ar' => "ركوب أمواج ",
            'title_color_ar' => " تكنولوجيا المعلومات. ",
            'description_ar' => ' يعرف مشغلو الرسم والطباعة هذا جيدًا ، في الواقع ، جميع المهن التي تتعامل مع عالم الاتصالات لها علاقة مستقرة بهذه الكلمات ',
            'title_en' => "Surfing The  ",
            'title_color_en' => " Waves of IT",
            'description_en' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta modi, libero, ratione quidem quibusdam ullam illo obcaecati .',
            'status' => 1,
            'year' => '2020',
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'background',
            'uploaded_by' =>  1,
            'url' => '/website/images/banner/home-banner-bg.jpg',
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => 'image',
            'uploaded_by' =>  1,
            'url' => '/website/images/banner/man-standing-laptop2.png',
        ]);

     }
}
