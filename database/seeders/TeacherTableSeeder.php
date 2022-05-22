<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([ 'name' => 'Ashwathi']);
        Teacher::create([ 'name' => 'Riya']);
        Teacher::create([ 'name' => 'Tony']);
        Teacher::create([ 'name' => 'Tessa']);
        Teacher::create([ 'name' => 'Jestin']);
        Teacher::create([ 'name' => 'Rinu']);
    }
}
