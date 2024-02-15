<?php

namespace App\Http\Controllers\auth;

use App\Events\ColumnUpdate;
use App\Http\Controllers\Controller;
use App\Models\ChatRoom;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $username = $request->username;
        $avatar = $request->avatar;
        $password = $request->password;

        $avatarPath = "/avatars/$avatar";

        $user = User::where('username', $username)->first();

        function random_color_part()
        {
            return str_pad( dechex( mt_rand( 0, 150 ) ), 2, '0', STR_PAD_LEFT);
        }

        function random_color() {
            return random_color_part() . random_color_part() . random_color_part();
        }

        if (!$user) {
            $freeSlot = Slot::whereNull('user_id')->first();
            $user = User::create([
                'username' => $username,
                'password' => Hash::make('aaa'),
                'avatar' => $avatarPath,
                'created_at' => now(),
                'updated_at' => null,
                'chat_room_id' => $freeSlot->chat_room_id,
                'color' => '#'.random_color()
            ]);

            $chatRoomLength = count(ChatRoom::all());

            $freeSlot->update([
                'user_id' => $user->id
            ]);
            $chatRooms = ChatRoom::with('slot')->get();

            broadcast(new ColumnUpdate($chatRooms));
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        if ($user) {
            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
        }

        return 'no user found';
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        $user = User::where('id', \auth()->id())->first();

        $user->update([
            'chat_room_id' => null,
        ]);

        Slot::where('user_id', \auth()->id())
            ->first()
            ->update([
                'user_id' => null
            ]);

        $chatRooms = ChatRoom::with('slot')->get();
        broadcast(new ColumnUpdate($chatRooms));

        return response()->json([
            'successfully logged out'
        ]);
    }
}
