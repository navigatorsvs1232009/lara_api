<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
protected $table = 'cards';

protected $fillable = [
    'id',
    'name',
    'desk_list_id',
    'created_at',
    'updated_at'
];
    public function deskList()
    {
        return $this->hasOne(DeskList::class);
    }

    public function card()
    {
        return $this->hasOne(Cards::class);
    }

    public function task()
    {
        return $this->hasOne(Task::class);
    }
}
