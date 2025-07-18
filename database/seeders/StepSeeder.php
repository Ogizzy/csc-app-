<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $steps = [
            ['step' => '1'],
            ['step' => '2'],
            ['step' => '3'],
            ['step' => '4'],
            ['step' => '5'],
            ['step' => '6'],
            ['step' => '7'],
            ['step' => '8'],
            ['step' => '9'],
            ['step' => '10'],
            ['step' => '11'],
            ['step' => '12'],
            ['step' => '13'],
            ['step' => '14'],
            ['step' => '15'],
        ];

        foreach ($steps as $step) {
            Step::firstOrCreate($step);
        }
    }
}
