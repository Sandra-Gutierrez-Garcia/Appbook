<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
USE App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function show($id)
    {
        //
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('users/edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        try {
            $user->update($request->validated());
            return redirect("/users/{$user->id}")->with('success', 'User updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update user.']);
        }
    }

    public function destroy($id)
    {
        //
        try{
            $user= User::find($id);
            $user->delete();
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Error destroying the account']);
        }
    }
}
