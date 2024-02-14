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

        if (!$user) {
            $user = User::create([
                'username' => $username,
                'password' => Hash::make('aaa'),
                'avatar' => $avatarPath,
                'created_at' => now(),
                'updated_at' => null,
                'chat_room_id' => 1
            ]);

            $chatRoomLength = count(ChatRoom::all());

            if (!Slot::where('chat_room_id', 1)
                ->where('id', 1)
                ->first()->user_id) {
                Slot::where('chat_room_id', 1)
                    ->where('id', 1)
                    ->update([
                        'user_id' => $user->id
                    ]);

            } else {
                Slot::where('chat_room_id', 1)
                    ->where('id', 2)
                    ->update([
                        'user_id' => $user->id
                    ]);
            }
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
