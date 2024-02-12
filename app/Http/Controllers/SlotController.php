<?php

namespace App\Http\Controllers;


use App\Events\ColumnUpdate;
use App\Models\ChatRoom;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function updateSlot($slot_id, $user_id) {
        $user = User::find($user_id);

        $currentSlot = Slot::where('user_id', $user_id);
        $currentSlot->update([
            'user_id' => null
        ]);
        $slot = Slot::find($slot_id);

        $slot->update([
            'user_id' => $user_id
        ]);

        $user->update([
            'chat_room_id' => $slot->chat_room_id
        ]);

        $chatRooms = ChatRoom::with('slot')->get();

        broadcast(new ColumnUpdate($chatRooms));

        return $slot;
    }
}
