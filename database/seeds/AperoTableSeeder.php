<?php

use Illuminate\Database\Seeder;

class AperoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //générer images

        $uploads = public_path(env('UPLOADS'));
        $files = File::allFiles($uploads);

        foreach($files as $file)
        {
            File::delete($file);
        }

        factory(App\Apero::class, 10)->create()->each(function($apero) use($uploads)
        {
            $tagsId=[1,2,3];
            shuffle($tagsId);
            $apero->tags()->attach([$tagsId[0], $tagsId[1]]);

            $apero->uri = $uri = str_random(12).'.jpg';
            $apero->user_id=rand(1,3);
            $apero->category_id=rand(1,3);
            $apero->save();

            $fileName = file_get_contents('http://lorempicsum.com/rio/400/200/'.rand(1,9));

            File::put(
                $uploads . DIRECTORY_SEPARATOR . $uri , $fileName

            );


        });

    }
}

