<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeskList extends Model
{
    use HasFactory;
    protected $table = 'desk_lists';

    protected $fillable = [
        'id',
        'name',
        'desk_id',
        'created_at',
        'updated_at'
    ];
    public function desks()
    {
        return $this->hasOne(Desk::class);
    }
}
