<?php

use Illuminate\Database\Seeder;

class PartenersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'title' => 'Partner number 1',
                'delivery' => 'Partner in Tanger' ,
                'slug' => 'Blog number 1'

            ],[
                'title' => 'Partner number 2',
                'delivery' => 'Partner in Rabat' ,
                'slug' => 'Blog number 2'

            ],[
                'title' => 'Partner number 3',
                'delivery' => 'Partner in Casa' ,
                'slug' => 'Blog number 3'

            ],

        ]);

    }
}
