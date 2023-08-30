<?php

namespace Database\Seeders;

use App\Models\MainPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainPage::updateOrCreate(
            ['id' => 1],
            [
            'title1' => 'Text...',
            'subtitle1' => 'Text...',
            'content1' => 'Text...',
            'title2' => 'Text...',
            'subtitle2' => 'Text...',
            'content2' => 'Text...',
            'title3' => 'Text...',
            'subtitle3' => 'Text...',
            'content3' => 'Text...',
            'title4' => 'Text...',
            'content4' => 'Text...',
            'title5' => 'Text...',
            'content5' => 'Text...',
            'title6' => 'Text...',
            'content6' => 'Text...',
        ]);
    }
}
