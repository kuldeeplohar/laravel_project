<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FacultiesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('faculties')->insert([
        
                [
                    'title' => 'Faculty of Economics',
                    'slug' => 'faculty-of-economics',
                    'shortcode' => '01',
                    'status' => 'active'
                ],
                [
                    'title' => 'Faculty of Engineering',
                    'slug' => 'faculty-of-engineering',
                    'shortcode' => '02',
                    'status' => 'active'
                ],
                [
                    'title' => 'Faculty of Humanities',
                    'slug' => 'faculty-of-humanities',
                    'shortcode' => '03',
                    'status' => 'active'
                ],
                [
                    'title' => 'Faculty of Political Science',
                    'slug' => 'faculty-of-political-science',
                    'shortcode' => '04',
                    'status' => 'active'
                ],
                [
                    'title' => 'Faculty of Computer Science',
                    'slug' => 'faculty-of-computer-science                    ',
                    'shortcode' => '05',
                    'status' => 'active'
                ],
                [
                    'title' => 'Faculty of Computer Science',
                    'slug' => 'faculty-of-computer-science                    ',
                    'shortcode' => '05',
                    'status' => 'disable'
                ],
                [
                    'title' => 'Faculty of Maths',
                    'slug' => 'faculty-of-maths                    ',
                    'shortcode' => '06',
                    'status' => 'disable'
                ],
            
          
        ]);
    }
}
