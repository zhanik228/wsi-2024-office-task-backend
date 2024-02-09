<?php

namespace App\Http\Controllers;

use App\Models\ChatRoom;
use App\Models\Column;
use App\Models\Slot;
use Illuminate\Http\Request;

class ColumnController extends Controller
{
    public function getAllColumns() {
        return ChatRoom::with('slots')->get();
    }
}
