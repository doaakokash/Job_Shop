<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // أضف هذا الاستيراد

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}