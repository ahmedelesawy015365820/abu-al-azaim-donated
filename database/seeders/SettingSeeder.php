<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        // Create Setting
        $setting = Setting::create([
            'email_1' => 'info@example.com',
            'email_2' => 'example.mail@hum.com',
            'mobile_1' => '0989 7876 9865 9',
            'mobile_2' => '(090) 8765 86543 85',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://linkedin.com/',
            'address_ar' => "123/أ، مدينة ميراندا ليكاولي <br/> بريكانو، دوب",
            'address_en' => "123/A, Miranda City Likaoli <br/> Prikano, Dope",
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20128.64413861943!2d-2.7421899750884515!3d54.66992213532175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487cfb78a54e4379%3A0xa63b24b99a2bf8fd!2sSainsbury&#39;s!5e0!3m2!1sen!2sbd!4v1701238095633!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        ]);

     }
}
