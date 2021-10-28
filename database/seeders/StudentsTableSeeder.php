<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Students::create([

            'name' => 'Bhavya Gandhi',

            'Aboutme' => '20 Years old, Plays Voilin, Hates KEM',

            'skill' => 'PHP, HTML, CSS, JS',

            'course' => 'Btech CSBS',

            'First-Preference' =>'UI/UX',
            'Second-Preference' =>'Web-Dev'

        ]);
        Students::create([

            'name' => 'Aarjav Hansoti',

            'Aboutme' => '19 Years old, Love Cricket and Cooking, Love Shwarma',

            'skill' => 'MYSQL,PHP, HTML, CSS, JS, REACT',

            'course' => 'Btech CSBS',

            'First-Preference' =>'Web-Dev',
            'Second-Preference' =>'Product Management'

        ]);
        Students::create([

            'name' => 'Mann Patel',

            'Aboutme' => '20 Years old, Love Cricket and Cooking, Love momos',

            'skill' => 'PHP, HTML, CSS, JS, Laravel',

            'course' => 'Btech CSBS',

            'First-Preference' =>'UI/UX',
            'Second-Preference' =>'Web-Dev'

        ]);
    }
}
