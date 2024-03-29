<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    protected $appends = ['unavailable'];

    public function getUnavailableAttribute() {
        return $this->slot;
    }

    public function slot() {
        return $this->hasMany(Slot::class)->whereNotNull('user_id');
    }

    public function messages() {
        return $this->hasMany('App\Models\ChatMessage');
    }

    public function slots() {
        return $this->hasMany(Slot::class, 'chat_room_id');
    }

}
