<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Book extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'adv_name',
        'oab_number',
        'entrance',
        'exit',
        'prisioner',
        'status',
        'observations',
        'user_id',
        'prisional_unit_id'
    ];

    protected $casts = [
        'prisioner' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prisionalUnit()
    {
        return $this->belongsTo(PrisionalUnit::class);
    }
}

