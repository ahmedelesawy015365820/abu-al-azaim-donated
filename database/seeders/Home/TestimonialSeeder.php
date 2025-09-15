<?php

namespace Database\Seeders\Home;

use App\Models\HomeSlider;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Testimonial::truncate();

        $model = Testimonial::create([
            'title_ar' => "إستر هوارد ",
            'description_ar' => 'استخدم عالميًا منهجيات الفسفورية باستخدام تقنيات الويب. نسّق التجارة الإلكترونية التفاعلية عبر الإنترنت. ',
            'title_en' => "Esther Howard",
            'description_en' => 'Worldwide engage phosfluorescently methodologies with in web-enabled technology. Interactively coordinate proactive e-commerce via.',
            'status' => 1,
            'job' => 'CEO & Founder',
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => null,
            'uploaded_by' =>  1,
            'url' => '/website/images/testimonial/testi3.jpg',
        ]);

        $model = Testimonial::create([
            'title_ar' => "إستر هوارد ",
            'description_ar' => 'استخدم عالميًا منهجيات الفسفورية باستخدام تقنيات الويب. نسّق التجارة الإلكترونية التفاعلية عبر الإنترنت. ',
            'title_en' => "Esther Howard",
            'description_en' => 'Worldwide engage phosfluorescently methodologies with in web-enabled technology. Interactively coordinate proactive e-commerce via.',
            'status' => 1,
            'job' => 'CEO & Founder',
        ]);

        $model->media()->create([
            'name' =>  $model['title_en'],
            'size' => 444,
            'mime_type' => 'sdd',
            'identifier' => null,
            'uploaded_by' =>  1,
            'url' => '/website/images/testimonial/testi2.jpg',
        ]);

     }
}
