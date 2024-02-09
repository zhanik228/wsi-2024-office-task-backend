<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $appends = ['user'];

    public function getUserAttribute() {
        return User::where('id', $this->user_id)->first();
    }
}
