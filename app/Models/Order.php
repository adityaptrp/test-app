<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'invitation_id',
        'name',
        'status',
        'price',
    ];

    public function invitation()
    {
        return $this->hasOne(Invitation::class);
    }
}
