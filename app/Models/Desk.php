<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;
    protected $table = 'desks';

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
    public function deskList()
    {
        return $this->hasOne(DeskList::class);
    }
}
