<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $appends = ['user'];

    protected $fillable = [
        'user_id'
    ];

    public function getUserAttribute() {
        return User::where('id', $this->user_id)->first();
    }

    public function getRoomAttribute() {
        return $this->room();
    }
    
}
