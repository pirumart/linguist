<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    protected $fillable = [
        'topic_id',
        'name',
    ];

    public function rules()
    {
        return [
            'name' => 'required|string|min:3'
        ];
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
