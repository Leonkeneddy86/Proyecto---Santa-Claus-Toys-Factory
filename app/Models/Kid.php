<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'offer_id',
        'news'
    ];

    public function Toy()
    {
        return $this->belongsTo(Toy::class);
    }
}