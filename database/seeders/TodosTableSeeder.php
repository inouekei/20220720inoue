<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'todo1'
        ];
        Todo::create($param);
        $param = [
            'content' => 'todo2'
        ];
        Todo::create($param);
        $param = [
            'content' => 'todo3'
        ];
        Todo::create($param);
    }
}
