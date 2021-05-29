<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'slug',
        'is_active',
        'design_id',
        'expired_at'
    ];

    protected $dates = [
        'expired_at'
    ];

    public function design()
    {
        return $this->hasOne(Design::class);
    }

    public function rsvp()
    {
        return $this->hasMany(RSVP::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
