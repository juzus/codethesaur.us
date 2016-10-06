<?php

use Illuminate\Database\Seeder;

class LanguageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['desktop','web','mobile','frontend','backend','server','robotics'];

        array_map(function ($name) {
            $now = date('Y-m-d H:i:s', strtotime('now'));
            DB::table('language_types')->insert([
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $types);
    }
}
