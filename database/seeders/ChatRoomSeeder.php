<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'name' => 'The Office',
                'limit' => 4
            ],
            [
                'name' => 'Desk',
                'limit' => 3
            ],
            [
                'name' => 'Open Office 1',
                'limit' => 9
            ],
            [
                'name' => 'Kitchen',
                'limit' => 5
            ],
            [
                'name' => 'Silent room 1',
                'limit' => 1
            ],
            [
                'name' => 'Silent room 2',
                'limit' => 1
            ],
            [
                'name' => 'Open office 2',
                'limit' => 4
            ],
            [
                'name' => 'Meeting room',
                'limit' => 15
            ],
            [
                'name' => 'Break room',
                'limit' => 5
            ],
            [
                'name' => 'Silent office 3',
                'limit' => 2
            ],
        ];
        DB::table('chat_rooms')->insert($rooms);
    }
}
