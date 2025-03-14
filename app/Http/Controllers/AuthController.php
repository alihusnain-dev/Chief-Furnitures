<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5",
        ]);

        $user = User::where("email", $request->email)->first();
        if (!$user) {
            return redirect("login")->with("error", "User not found.");
        }

        $credentials = $request->only("email", "password");

        $remember = $request->has('remember'); // Check if 'remember me' is checked

        if (Auth::attempt($credentials, $remember)) { // Pass $remember
            return redirect()->intended(route("home"))->with("success", $user->name);
        } else {
            return redirect("login")->with("error", "Invalid credentials! User Not Found.");
        }
    }
    public function signup(Request $request)
    {
        // Validate input
        $request->validate([
            "name" => "required|max:50|min:3",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:4",
            "gender" => "required",
            "file" => "image|mimes:jpeg,png,jpg,gif,svg",
            "address" => "required|string|max:100",
            "city" => "required|string|max:50",
            "phone" => "required|max:15",
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if ($request->hasFile('file')) {
                $filePath = $request->file('file')->store('profile_images', 'public');
                $user->file = $filePath;
            }
            $user->address = $request->address;
            $user->city = $request->city;
            $user->phone = $request->phone;
            $user->birth = $request->birth;
            $user->gender = $request->gender;
            $user->save();

            // Redirect to login page with success message
            return redirect('login')->with('success', 'Account created successfully! You can now log in.');
        } catch (\Exception $e) {
            // Handle error and redirect back with error message
            return redirect("signup")->with('error', 'Failed to create user: ' . $e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Logged out Successfully');
    }
}
