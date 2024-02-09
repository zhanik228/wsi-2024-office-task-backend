<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request) {

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

            Slot::where('chat_room_id', 1)
                ->where('id', 1)
                ->update([
                    'user_id' => $user->id
                ]);
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

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return response()->json([
            'successfully logged out'
        ]);
    }
}
