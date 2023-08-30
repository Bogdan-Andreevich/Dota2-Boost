<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
            About::updateOrCreate(
                ['id' => 1],
                [
                'mainTitle' => 'Text...',
                'animalTitle' => 'Text...',
                'animalSubtitle' => 'Text...',
                'animalContent1' => 'Text...',
                'animalContent2' => 'Text...',
                'courierTitle' => 'Text...',
                'courierSubtitle' => 'Text...',
                'courierContent' => 'Text...',
                'wardTitle' => 'Text...',
                'wardSubtitle' => 'Text...',
                'wardContent' => 'Text...',
                'techiesTitle1' => 'Text...',
                'techiesSubtitle1' => 'Text...',
                'techiesContent1' => 'Text...',
                'techiesTitle2' => 'Text...',
                'techiesContent2' => 'Text...',
            ]);
    }
}
