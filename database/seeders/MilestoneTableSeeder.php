<?php

namespace Database\Seeders;

use App\Models\Milestone;
use Illuminate\Database\Seeder;

class MilestoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Milestone::create([
                'title' => 'Kick Off',
                'price' => '',
                'type' => 'Fixed'
         ]);

            Milestone::create([
                'title' => 'Down Payment',
                'price' => '40',
                'type' => 'Percentage'
            ]);

            Milestone::create([
                'title' => 'Material Fabrication Done',
                'price' => '40',
                'type' => 'Percentage'
            ]);

            Milestone::create([
                'title' => 'Upon Installation',
                'price' => '10',
                'type' => 'Percentage'
            ]);

            Milestone::create([
                'title' => 'Upon Completion',
                'price' => '10',
                'type' => 'Percentage'
            ]);
    }
}