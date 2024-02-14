<?php

namespace App\Http\Controllers\user;

use App\Events\ColumnUpdate;
use App\Http\Controllers\Controller;
use App\Models\ChatRoom;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $request->user('sanctum');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $avatar = $request->avatar ?? $user->avatar;
        $avatarPath = '';
        if ($request->avatar) {
            $avatarPath = "/avatars/$avatar";
            $user->update([
                'avatar' => $avatarPath
            ]);
        }
        $user = User::find($id);
        $user->update(['chat_room_id' => $request->chat_room_id ]);
        $chatRooms = ChatRoom::with('slot')->get();
        broadcast(new ColumnUpdate($chatRooms));
        return User::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
