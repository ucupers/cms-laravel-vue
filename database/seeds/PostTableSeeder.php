<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Beyondplus\Models\Bp_post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bp_post::truncate();
        $this->faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++) {
            $Bp_post = [
                'title'         => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
                'body'          => $this->faker->text,
                'post_link'     => str_replace(' ', '-', $this->faker->sentence($nbWords = 6, $variableNbWords = true)),
                'post_type'     => 'post',
                'created_at'    => '2016-06-3 00:36:29'

            ];
            Bp_post::insert($Bp_post);
        }

        for ($y=0; $y < 5; $y++) {
            $Bp_post = [
                'title'         => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
                'body'          => $this->faker->text,
                'post_link'     => str_replace(' ', '-', $this->faker->sentence($nbWords = 6, $variableNbWords = true)),
                'post_type'     => 'page',
                'created_at'    => '2016-06-3 00:36:29'
            ];
            Bp_post::insert($Bp_post);
        }
    }
}