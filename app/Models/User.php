<?php

namespace App\Models;

// استيراد الكلاس الصحيح للمصادقة
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    // ... الكود الحالي للنموذج (fillable, hidden, casts, إلخ)

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function supportMessages(): HasMany
    {
        return $this->hasMany(SupportMessage::class);
    }
}
