<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimebsktbllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            [
                'position' => 'Point Guard',
                'name' => 'Kuroko Tetsuya',
                'jerseyno' => '11',
                'team' => 'Seirin High',
            ],
            [
                'position' => 'Center',
                'name' => 'Hanamichi Sakuragi',
                'jerseyno' => '10',
                'team' => 'Shohoku',
            ],
            [
                'position' => 'Power Forward',
                'name' => 'Akira Sendoh',
                'jerseyno' => '11',
                'team' => 'Ryonan',
            ],
            [
                'position' => 'Small Forward',
                'name' => 'Kaedi Rukawa',
                'jerseyno' => '11',
                'team' => 'Shoyo',
            ],
            [
                'position' => 'Shooting Guard',
                'name' => 'Kiyota Nobunaga',
                'jerseyno' => '30',
                'team' => 'Kainan',
            ],
        ];

        foreach ($players as $player) {
            DB::table('animebsktblls')->insert($player);

        }
    }
}
