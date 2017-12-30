<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'about',
        'languages',
        'facebook',
        'twitter',
        'location',
    ];

    public function rules()
    {
        return [
            'about'     => 'sometimes|string',
            'languages' => 'sometimes|string',
            'facebook'  => 'sometimes|string',
            'twitter'   => 'sometimes|string',
            'location'  => 'sometimes|string',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
