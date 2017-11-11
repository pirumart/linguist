<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function subTopics()
    {
        return $this->hasMany(SubTopic::class);
    }
}
