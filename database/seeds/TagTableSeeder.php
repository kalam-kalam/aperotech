<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name' => 'POO'],
            ['name' => 'LARAVEL'],
            ['name' => 'WORDPRESS'],
            ['name' => 'JS'],
            ['name' => 'DOCTRINE'],
            ['name' => 'SYMPHONY'],
        ]);//
    }
}
