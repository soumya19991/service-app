<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_id',
        'service_id',
        'name',
        'phone',
        'city',
        'pin_code',
        'transfer_at',
    ];
    public function service()
    {
        return $this->belongsTo(service::class, 'service_id');
    }
    public function transferUser()
    {
        return $this->belongsTo(User::class, 'transfer_at');
    }

}
