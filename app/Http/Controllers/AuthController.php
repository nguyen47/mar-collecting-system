<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function displayLoginPage()
    {
        return view("auth.login");
    }

    public function login()
    {
        $credentials = request()->validate([
            "email" => "email|required",
            "password" => "required",
        ]);

        if (Auth::attempt($credentials)) {
            request()
                ->session()
                ->regenerate();

            return redirect()->route("admin.dashboard");
        }

        return back()
            ->withErrors([
                "email" => "The provided credentials do not match our records.",
            ])
            ->onlyInput("email");
    }

    public function displayRegisterPage()
    {
        return view("auth.register");
    }

    public function register()
    {
        request()->validate([
            "first_name" => "required|max:255",
            "last_name" => "required",
            "email" => "email|required|unique:users",
            "password" => [
                "required",
                "confirmed",
                "min:8", // must be at least 10 characters in length
                "max:16",
                "regex:/[a-z]/", // must contain at least one lowercase letter
                "regex:/[A-Z]/", // must contain at least one uppercase letter
                "regex:/[0-9]/", // must contain at least one digit
            ],
        ]);
        $data = [
            "first_name" => request("first_name"),
            "last_name" => request("last_name"),
            "email" => request("email"),
            "password" => Hash::make(request("password")),
        ];
        $user = User::create($data);
        $user->assignRole("user");
        return redirect()
            ->route("admin.signIn")
            ->with("success", "Register success");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("admin.signIn");
    }

    public function createRoles()
    {
        Role::create(["name" => "admin"]);
        Role::create(["name" => "user"]);
        // $user = User::where("id", Auth::user()->id)->first();
        // $user->assignRole("admin");
    }
}
