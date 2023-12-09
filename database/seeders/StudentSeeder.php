<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {
        // DB::table('students')->insert(
        //     [
        //         'name' => 'sonam',
        //         'city' => 'ellahabad',
        //         'marks' => Hash::make('55'),
        //     ]
        // );
        // DB::table('students')->insert(
        //     [
        //         'name' => Str::random(5),
        //         'city' =>  Str::random(5),
        //         'marks' =>  Str::random(5),
        //     ]
        // );
        // foreach (range(1,10) as  $value) {
        // DB::table('students')->insert(
        //     [
        //         'name' => Str::random(5),
        //         'city' =>  Str::random(5),
        //         'marks' =>  Str::random(5),
        //     ]
        // );}
        $faker=Faker::create();
        foreach (range(1,4) as  $value) {
        DB::table('students')->insert(
            [
                'name' => $faker->name,
                'city' =>  $faker->city,
                'marks' =>  $faker->e164PhoneNumber,
            ]
        );}
    }
}
