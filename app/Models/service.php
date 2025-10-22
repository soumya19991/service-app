<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\ServiceRequest;

class service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];
    // public function serviceRequests()
    // {
    //     return $this->hasMany(ServiceRequest::class);
    // }
}