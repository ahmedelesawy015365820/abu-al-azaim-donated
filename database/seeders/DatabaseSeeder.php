<?php

namespace Database\Seeders;

use Database\Seeders\About\OneAboutSeeder;
use Database\Seeders\About\TwoAboutSeeder;
use Database\Seeders\Home\CounterSectionSeeder;
use Database\Seeders\Home\FaqSectionSeeder;
use Database\Seeders\Home\FaqSeeder;
use Database\Seeders\Home\HomeSliderSeeder;
use Database\Seeders\Home\PartnerSeeder;
use Database\Seeders\Home\ServiceSeeder;
use Database\Seeders\Home\TestimonialSeeder;
use Database\Seeders\Home\ProjectCategorySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HomeSliderSeeder::class,
            SettingSeeder::class,
            FaqSectionSeeder::class,
            FaqSeeder::class,
            PartnerSeeder::class,
            CounterSectionSeeder::class,
            ServiceSeeder::class,
            OneAboutSeeder::class,
            ProjectCategorySeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            TwoAboutSeeder::class,
            ProjectSeeder::class
        ]);
    }
}
