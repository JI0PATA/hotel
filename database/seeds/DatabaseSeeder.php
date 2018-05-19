<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);

        DB::table('rooms')->insert([
            'name' => 'Одноместный'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Двухместный'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Трёхместный'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Четырёхместный'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Люкс'
        ]);

        DB::table('services')->insert([
            'name' => 'Wi-Fi'
        ]);
        DB::table('services')->insert([
            'name' => 'Бассейн'
        ]);
        DB::table('services')->insert([
            'name' => 'Ресторан'
        ]);
        DB::table('services')->insert([
            'name' => 'Бизнес-центр'
        ]);
        DB::table('services')->insert([
            'name' => 'Прачечная'
        ]);
        DB::table('services')->insert([
            'name' => 'Бар'
        ]);
    }
}
