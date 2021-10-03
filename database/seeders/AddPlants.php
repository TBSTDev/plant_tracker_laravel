<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AddPlants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('plants')->insert([
			'name' => 'Oregano',
			'species' => 'Herb',
			'watering_instructions' => '3x a week',
			'photo' => 'cuban-oregano.jpg',
		]);
		DB::table('plants')->insert([
			'name' => 'Turmeric',
			'species' => 'Herb, Root crop',
			'watering_instructions' => '4x a week',
			'photo' => 'turmeric.jpg',
		]);
		DB::table('plants')->insert([
			'name' => 'Sampaguita',
			'species' => 'Flower',
			'watering_instructions' => 'Daily',
			'photo' => 'sampaguita.jpg',
		]);
    }
}
