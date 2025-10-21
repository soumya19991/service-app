<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'mobile_number',
        'pin_code',
        'city',
    ];


     // ✅ Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // ✅ Relationship with Service
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}