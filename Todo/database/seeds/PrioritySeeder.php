<?php

use Illuminate\Database\Seeder;
use App\priority;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        priority::create([
            'priority' => 'Critical',
            'priority_level' => 1,
            'priority_color' => '#D1453B',
        ]);
        priority::create([
            'priority' => 'High',
            'priority_level' => 2,
            'priority_color' => '#EB8909',
        ]);
        priority::create([
            'priority' => 'Medium',
            'priority_level' => 3,
            'priority_color' => '#246FE0',
        ]);
        priority::create([
            'priority' => 'Low',
            'priority_level' => 4,
            'priority_color' => '#202020',
        ]);
    }
}
