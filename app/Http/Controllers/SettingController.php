<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class SettingController extends Controller
{
    //
    public function profile(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            return view("user_profile", compact("user"));
        }
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->withErrors('User not found.');
        }

        // Validate the input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'city' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            'birth' => 'nullable',
            'file' => 'nullable|image|max:2048',
        ]);
        if ($request->hasFile('file')) {
            if ($user->file) {
                Storage::delete($user->file);
            }

            $validated['file'] = $request->file('file')->store('profile_images', 'public');
        }

        // Update the user with the validated data, including the new file path if applicable
        $user->update($validated);

        // Redirect to the profile page with a success message
        return redirect()->route('setting.user.profile', $user->id)->with('successProfile', 'Your profile was updated successfully.');
    }
}
