<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'email',
    ];

    protected $table = "rsvp";

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
