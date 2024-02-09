<?php

namespace Database\Seeders;

use App\Models\ChatRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $theOfficeChat = ChatRoom::where('name', 'The Office')->firstOrFail();

        $theOfficeSlots = [
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 405,
                'position_y' => 63,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 335,
                'position_y' => 163,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 365,
                'position_y' => 183,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 395,
                'position_y' => 183,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('slots')->insert($theOfficeSlots);


    }
}
