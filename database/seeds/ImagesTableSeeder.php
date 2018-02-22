<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    public function run()
    {
		factory(App\Image::class, 500)->create();
    }
}