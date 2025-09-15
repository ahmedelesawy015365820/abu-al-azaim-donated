<?php

namespace Database\Seeders\Home;

use App\Models\FaqSection;
use Illuminate\Database\Seeder;

class FaqSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $model = FaqSection::create([
            'number_section' => '03',
        ]);

        $model->setTranslations([
            'ar' => [
                'title'       => 'We are Expert in those industry',
                'description' => 'Leading Developer Of Commercial <br/> & Residential Projects',
            ],
            'en' => [
                'title'       => 'We are Expert in those industry',
                'description' => 'Leading Developer Of Commercial <br/> & Residential Projects',
            ],
        ]);

    }
}