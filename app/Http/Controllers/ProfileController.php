<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $profile)
    {
        $profile = $profile->load('user');
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id)->load('profile');
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = User::find($id)->profile;
        foreach (['languages', 'about', 'facebook', 'twitter', 'location'] as $field) {
            if ($field != null) {
                $profile->$field     = $request->$field;
            }
        }

        if (!$profile->save()) {
            return redirect()->back()->withInput($request->all())
                ->withErrors($errors);
        }
        return redirect("/profile/$id")->with('status', "Your profile has been successfully updated.");
    }
}
