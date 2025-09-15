<?php

namespace Database\Seeders\About;

use App\Models\AboutDetail;
use App\Models\OneAbout;
use Illuminate\Database\Seeder;

class OneAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $model = OneAbout::create([
            'years_experience' => 10,
            'url' => 'https://www.youtube.com/watch?v=5CLmRIHR5Zw',
            'title_ar' => "نحن نوفر حلول تقنية معلومات مثالية",
            'title_color_ar' => " وتقنيات متكاملة لأي شركة ناشئة. ",
            'description_ar' => 'ضع استراتيجيات بقاء رابحة للجميع لضمان الهيمنة الاستباقية. في نهاية المطاف، من الآن فصاعدًا، أصبح الوضع الطبيعي الجديد، الذي تطور من الوضع التشغيلي X، على وشك الظهور.',
            'title_en' => "We provide perfect it ",
            'title_color_en' => " solutions & technology for any startups.",
            'description_en' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day going forward, a new normal that has evolved from operational X is on the runway.'
        ]);

        $aboutDetail1 = AboutDetail::create([
            'one_about_id' => $model->id,
            'title_ar' => "الشبكات الداخلية",
            'title_en' => "Internal Networking",
        ]);
        $aboutDetail2 = AboutDetail::create([
            'one_about_id' => $model->id,
            'title_ar' => "الخدمات التقنية",
            'title_en' => "Tech Services",
        ]);

    }
}