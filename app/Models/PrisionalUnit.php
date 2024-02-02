<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PrisionalUnit extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name',
        'acronym'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
