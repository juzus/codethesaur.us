<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = ['Java','C++','C#','JavaScript'];

        array_map(function ($name) {
            $now = date('Y-m-d H:i:s', strtotime('now'));
            DB::table('languages')->insert([
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
                'type_id' => 1,
            ]);
        }, $langs);
    }
}
