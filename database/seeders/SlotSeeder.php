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
                'position_x' => 278,
                'position_y' => 170,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 229,
                'position_y' => 240,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 254,
                'position_y' => 252,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $theOfficeChat->id,
                'position_x' => 275,
                'position_y' => 252,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('slots')->insert($theOfficeSlots);

        $deskChat = ChatRoom::where('name', 'Desk')->firstOrFail();

        $deskSlots = [
            [
                'chat_room_id' => $deskChat->id,
                'position_x' => 165,
                'position_y' => 299,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $deskChat->id,
                'position_x' => 199,
                'position_y' => 349,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $deskChat->id,
                'position_x' => 165,
                'position_y' => 358,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($deskSlots);

        $meetingRoom = ChatRoom::where('name', 'Meeting room')->firstOrFail();

        $meetingSlots = [
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 365,
                'position_y' => 212,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 383,
                'position_y' => 184,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 411,
                'position_y' => 184,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 438,
                'position_y' => 184,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 466,
                'position_y' => 184,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 487,
                'position_y' => 212,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 465,
                'position_y' => 234,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 439,
                'position_y' => 234,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 412,
                'position_y' => 234,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 384,
                'position_y' => 234,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 510,
                'position_y' => 168,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 510,
                'position_y' => 192,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 510,
                'position_y' => 212,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 510,
                'position_y' => 234,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $meetingRoom->id,
                'position_x' => 510,
                'position_y' => 255,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($meetingSlots);

        $openOffice1Room = ChatRoom::where('name', 'Open Office 1')->firstOrFail();

        $openOffice1Slots = [
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 305,
                'position_y' => 307,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 345,
                'position_y' => 376,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 379,
                'position_y' => 376,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 458,
                'position_y' => 376,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 388,
                'position_y' => 486,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 309,
                'position_y' => 486,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 205,
                'position_y' => 495,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 205,
                'position_y' => 418,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice1Room->id,
                'position_x' => 268,
                'position_y' => 459,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($openOffice1Slots);

        $silentRoom1 = ChatRoom::where('name', 'Silent room 1')->firstOrFail();

        $silentRoom1Slots = [
            [
                'chat_room_id' => $silentRoom1->id,
                'position_x' => 471,
                'position_y' => 501,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($silentRoom1Slots);

        $silentRoom2 = ChatRoom::where('name', 'Silent room 2')->firstOrFail();

        $silentRoom2Slots = [
            [
                'chat_room_id' => $silentRoom2->id,
                'position_x' => 606,
                'position_y' => 404,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($silentRoom2Slots);

        $silentRoom3 = ChatRoom::where('name', 'Silent room 3')->firstOrFail();

        $silentRoom3Slots = [
            [
                'chat_room_id' => $silentRoom3->id,
                'position_x' => 902,
                'position_y' => 466,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $silentRoom3->id,
                'position_x' => 902,
                'position_y' => 490,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($silentRoom3Slots);

        $kitchen = ChatRoom::where('name', 'Kitchen')->firstOrFail();

        $kitchenSlots = [
            [
                'chat_room_id' => $kitchen->id,
                'position_x' => 637,
                'position_y' => 379,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $kitchen->id,
                'position_x' => 662,
                'position_y' => 349,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $kitchen->id,
                'position_x' => 685,
                'position_y' => 364,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $kitchen->id,
                'position_x' => 703,
                'position_y' => 348,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $kitchen->id,
                'position_x' => 686,
                'position_y' => 329,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($kitchenSlots);

        $breakRoom = ChatRoom::where('name', 'Breakroom')->firstOrFail();

        $breakRoomSlots = [
            [
                'chat_room_id' => $breakRoom->id,
                'position_x' => 837,
                'position_y' => 172,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $breakRoom->id,
                'position_x' => 876,
                'position_y' => 172,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $breakRoom->id,
                'position_x' => 882,
                'position_y' => 205,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $breakRoom->id,
                'position_x' => 879,
                'position_y' => 236,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $breakRoom->id,
                'position_x' => 828,
                'position_y' => 236,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($breakRoomSlots);

        $openOffice2 = ChatRoom::where('name', 'Open Office 2')->firstOrFail();

        $openOffice2Slots = [
            [
                'chat_room_id' => $openOffice2->id,
                'position_x' => 883,
                'position_y' => 322,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice2->id,
                'position_x' => 881,
                'position_y' => 356,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice2->id,
                'position_x' => 800,
                'position_y' => 366,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'chat_room_id' => $openOffice2->id,
                'position_x' => 892,
                'position_y' => 413,
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('slots')->insert($openOffice2Slots);
    }
}
