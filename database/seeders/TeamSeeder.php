<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Partner;
use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::truncate();

        $teams = [
            [
                'title_ar' => " جون برادشو",
                'title_en' => "John Bradshaw",
                'job' => "Senior Advisor",
                'url' => '/website/images/team/team_img_5.jpg',
            ],
            [
                'title_ar' => " نيك باول",
                'title_en' => "Nick Powel",
                'job' => "Leader",
                'url' => '/website/images/team/team_img_1.jpg',
            ],
            [
                'title_ar' => " إليزابيث ليلى",
                'title_en' => "Elizabeth Layla",
                'job' => "Designer",
                'url' => '/website/images/team/team_img_2.jpg',
            ],
            [
                'title_ar' => " بول ووكر",
                'title_en' => "Paul Walker",
                'job' => "Director",
                'url' => '/website/images/team/team_img_4.jpg',
            ],
        ];

        foreach ($teams as $team) {
            $model = Team::create([
                'title_ar' => $team['title_ar'],
                'title_en' => $team['title_en'],
                'job' => $team['job'],
            ]);
            $model->media()->create([
                'name' =>  $team['title_en'],
                'size' => 444,
                'mime_type' => 'sdd',
                'identifier' => null,
                'uploaded_by' =>  1,
                'url' => $team['url'],
            ]);
        }

    }
}