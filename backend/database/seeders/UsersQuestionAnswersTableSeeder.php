<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersQuestionAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('answers')->delete();
        \DB::table('questions')->delete();

        User::factory(3)->create()->each(function ($u) {
             $u->questions()
                 ->saveMany(
                     Question::factory(rand(1,5))->make()
                 )
                 ->each(function ($q) {
                     $q->answers()->saveMany(
                         Answer::factory(rand(1,5))->make()
                     );
                 });
         });
    }
}
