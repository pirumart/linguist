<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function rules()
    {
        return [
            'name'          => 'required|string|min:3',
            'description'   => 'required|string|min:4'
        ];
    }

    public function subTopics()
    {
        return $this->hasMany(SubTopic::class);
    }
}
