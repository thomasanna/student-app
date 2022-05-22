<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term;

class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::create([ 'name' => 'One']);
        Term::create([ 'name' => 'Two']);
        Term::create([ 'name' => 'Three']);
    }
}
