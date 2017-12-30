<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Profile;

class UserObserver
{
    public function created(User $user)
    {
        $user_profile           = new Profile;
        $user_profile->user_id  = $user->id;
        $user_profile->save();
    }

    public function deleting(User $user)
    {
        # code...
    }
}
